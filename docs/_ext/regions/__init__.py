import os
from sphinx.addnodes import toctree
from docutils import nodes
import xml.dom.minidom

def setup(app):
    """
    see: http://sphinx.pocoo.org/ext/appapi.html
    this is the primary extension point for Sphinx
    """
    from sphinx.application import Sphinx
    if not isinstance(app, Sphinx): return

    app.add_role('regions', regions_role)

def regions_role(name, rawtext, text, lineno, inliner, options={}, content={}):
    """Inserts a list of regions available to a service name

    Returns 2 part tuple containing list of nodes to insert into the
    document and a list of system messages.  Both are allowed to be
    empty.

    :param name:    The role name used in the document.
    :param rawtext: The entire markup snippet, with role.
    :param text:    The text marked with the role.
    :param lineno:  The line number where rawtext appears in the input.
    :param inliner: The inliner instance that called us.
    :param options: Directive options for customization.
    :param content: The directive content for customization.
    """
    try:
        service_name = str(text)
        if not service_name:
            raise ValueError
        app = inliner.document.settings.env.app
        node = make_regions_node(rawtext, app, str(service_name), options)
        return [node], []
    except ValueError:
        msg = inliner.reporter.error(
            'The service name "%s" is invalid; ' % text, line=lineno)
        prb = inliner.problematic(rawtext, rawtext, msg)
        return [prb], [msg]

def make_regions_node(rawtext, app, service_name, options):
    """Create a list of regions for a service name

    Parses the endpoints.xml file of the SDK to generate the list of regions.

    :param rawtext:      Text being replaced with the list node.
    :param app:          Sphinx application context
    :param service_name: Service name
    :param options:      Options dictionary passed to role func.
    """

    # Open the endpoints.xml file of the SDK
    parsed = xml.dom.minidom.parse(os.path.abspath("../src/Aws/Common/Resources/endpoints.xml"))
    regions = []

    for service in parsed.getElementsByTagName('Service'):
        if service.getElementsByTagName('Name')[0].firstChild.nodeValue == service_name:
            for region in service.getElementsByTagName('RegionName'):
                regions.append(region.firstChild.nodeValue)
            break
    else:
        raise ValueError("Unknown service: %s" % service_name)

    return nodes.Text(", ".join(regions))
