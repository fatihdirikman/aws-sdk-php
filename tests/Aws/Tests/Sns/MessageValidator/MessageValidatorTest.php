<?php
/**
 * Copyright 2010-2013 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License.
 * A copy of the License is located at
 *
 * http://aws.amazon.com/apache2.0
 *
 * or in the "license" file accompanying this file. This file is distributed
 * on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either
 * express or implied. See the License for the specific language governing
 * permissions and limitations under the License.
 */

namespace Aws\Tests\Sns\MessageValidator;

use Aws\Sns\MessageValidator\AbstractMessage;
use Aws\Sns\MessageValidator\MessageValidator;
use Guzzle\Common\Collection;
use Guzzle\Plugin\Mock\MockPlugin;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Client;

class MessageValidatorTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected function setUp()
    {
        if (!extension_loaded('openssl')) {
            $this->markTestSkipped('The OpenSSL extension is required to run the tests for MessageValidator.');
        }
    }

    public function testCheckReturnsFalseOnFailedValidation()
    {
        $validator = new MessageValidator();
        $message = $this->getMockMessage();
        $this->assertFalse($validator->checkIfValid($message));
    }

    public function testValidateFailsWhenCertUrlDoesNotMatchAws()
    {
        $this->setExpectedException('Aws\Sns\MessageValidator\Exception\CertificateFromUnrecognizedSourceException');

        $validator = new MessageValidator();

        /** @var $message AbstractMessage */
        $message = $this->getMockMessage();
        $validator->validate($message);
    }

    public function testValidateFailsWhenCannotDeterminePublicKey()
    {
        $this->setExpectedException('Aws\Sns\MessageValidator\Exception\CannotGetPublicKeyFromCertificateException');

        // Create the validator with a mock HTTP client
        $client = $this->getMockClient();
        $validator = new MessageValidator($client);

        /** @/var $message AbstractMessage */
        $message = $this->getMockMessage(array('SigningCertURL' => 'https://foo.amazonaws.com/bar'));
        $validator->validate($message);
    }

    public function testValidateFailsWhenMessageIsInvalid()
    {
        $this->setExpectedException('Aws\Sns\MessageValidator\Exception\InvalidMessageSignatureException');

        // Get the signature for some dummy data
        list($signature, $certificate) = $this->getSignature('foo');

        // Create the validator with a mock HTTP client that will respond with the certificate
        $client = $this->getMockClient(new Response(200, null, $certificate));
        $validator = new MessageValidator($client);

        /** @/var $message AbstractMessage */
        $message = $this->getMockMessage(array(
            'SigningCertURL' => 'https://foo.amazonaws.com/bar',
            'Signature'      => $signature,
        ));
        $validator->validate($message);
    }

    public function testValidateSucceedsWhenMessageIsValid()
    {
        // Create a real message
        $message = AbstractMessage::fromArray(array(
            'Message'        => 'foo',
            'MessageId'      => 'bar',
            'Timestamp'      => time(),
            'TopicArn'       => 'baz',
            'Type'           => 'Notification',
            'SigningCertURL' => 'https://foo.amazonaws.com/bar',
            'Signature'      => null,
        ));

        // Get the signature for a real message
        list($signature, $certificate) = $this->getSignature($message->getStringToSign());
        $message->getData()->set('Signature', $signature);

        // Create the validator with a mock HTTP client that will respond with the certificate
        $client = $this->getMockClient(new Response(200, null, $certificate));
        $validator = new MessageValidator($client);

        // The message should validate
        $this->assertTrue($validator->checkIfValid($message));
    }

    protected function getMockMessage(array $data = array())
    {
        return $this->getMockForAbstractClass('Aws\Sns\MessageValidator\AbstractMessage', array(new Collection($data)));
    }

    protected function getMockClient(Response $response = null)
    {
        $response = $response ?: new Response(200);

        $plugin = new MockPlugin();
        $plugin->addResponse($response);

        $client = new Client();
        $client->addSubscriber($plugin);

        return $client;
    }

    protected function getSignature($data)
    {
        // Generate a new Certificate Signing Request and public/private keypair
        $csr = openssl_csr_new(array(), $keypair);

        // Create the self-signed certificate
        $x509 = openssl_csr_sign($csr, null, $keypair, 1);
        openssl_x509_export($x509, $certificate);

        // Create the signature
        $privateKey = openssl_get_privatekey($keypair);
        openssl_sign($data, $signature, $privateKey);

        // Free the openssl resources used
        openssl_pkey_free($keypair);
        openssl_x509_free($x509);

        return array(base64_encode($signature), $certificate);
    }
}
