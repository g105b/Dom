<?php
namespace g105b\Dom;

/**
 * @property string $characterSet
 * @property string $contentType
 * @property-read string $doctype The document type definition (DTD).
 * @property-read Element $documentElement The direct child of the
 * document. This is normally the HTML element.
 * @property-read NodeList $anchors List of all anchors within the document.
 *  Anchors are <a> elements with a `name` attribute.
 * @property-read Element $body The <body> element.
 * @property-read NodeList $forms List of all <form> elements.
 * @property-read Element $head The <head> element.
 * @property-read NodeList $images List of all <img> elements.
 * @property-read NodeList $links List of all links within the document.
 *  Links are <a> elements with an `href` attribute.
 * @property-read NodeList $scripts List of all <script> elements.
 * @property-read NodeList $styleSheets List of all stylesheets within the
 *  document. Stylesheets are <link> elements with attribute `rel=stylesheet`
 * @property string $title The document title.
 */
class Document extends Element {

public function __construct() {

}

/**
 * Adopts a node from an external document. The node and its subtree is
 * removed from the document it's in (if any), and its ownerDocument is
 * changed to the current document. The node can then be inserted into the
 * current document.
 * @param  Node $externalNode The node from another document to be adopted
 * @return Node	The adopted node that can be used in the current document.
 * The new node's parentNode is null, since it has not yet been inserted
 * into the document tree.
 */
public function adoptNode(Node $externalNode): Node {
	// TODO.
}

}#