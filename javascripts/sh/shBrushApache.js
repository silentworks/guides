/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/SyntaxHighlighter
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/SyntaxHighlighter/donate.html
 *
 * @version
 * 3.0.83 (July 02 2010)
 * 
 * @copyright
 * Copyright (C) 2004-2010 Alex Gorbatchev.
 *
 * @license
 * Dual licensed under the MIT and GPL licenses.
 */
;(function()
{
	// CommonJS
	typeof(require) != 'undefined' ? SyntaxHighlighter = require('shCore').SyntaxHighlighter : null;

	function Brush()
	{

		var functions =	'DirectoryIndex RewriteRule';

	
		this.regexList = [
				{ regex: new RegExp(this.getKeywords(functions), 'gm'),	css: 'functions' }			// keywords
			];
	};

	Brush.prototype	= new SyntaxHighlighter.Highlighter();
	Brush.aliases	= ['apache'];

	SyntaxHighlighter.brushes.Apache = Brush;

	// CommonJS
	typeof(exports) != 'undefined' ? exports.Brush = Brush : null;
})();
