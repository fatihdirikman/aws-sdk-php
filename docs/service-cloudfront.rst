=================
Amazon CloudFront
=================

.. include:: _snippets/service_intro.txt

.. code-block:: php

    use Aws\CloudFront\CloudFrontClient;

    $client = CloudFrontClient::factory(array(
        'key'    => '<aws access key>',
        'secret' => '<aws secret key>'
    ));

.. include:: _snippets/service_intro_service_locator.txt

.. code-block:: php

    use Aws\Common\Aws;

    $aws = Aws::factory('/path/to/my_config.json');
    $client = $aws->get('cloudfront');

.. |service_name| replace:: Amazon CloudFront

*More documentation coming soon.*
