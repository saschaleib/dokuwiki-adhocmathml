<?php
/**
 * Group Sub-Expressions Row Element for the Ad Hoc MathML plugin
 *
 * Defines  <mrow> ... </mrow> syntax
 * More info: https://developer.mozilla.org/en-US/docs/Web/MathML/Element/mrow
 *
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Sascha Leib <sascha.leib(at)kolmio.com>
 */

class syntax_plugin_adhocmathml_mrow extends syntax_plugin_adhocmathml_abstract {

	protected $tag = 'mrow';

	/* no specific attributes */

    /**
     * ODT Renderer Functions
     */
    function renderODTElementOpen($renderer, $HTMLelement, $data) {
		//$renderer->table_open();
    }
    function renderODTElementClose($renderer, $element) {
		//$renderer->table_close();
    }
}