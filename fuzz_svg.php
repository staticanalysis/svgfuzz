<?php
/**
 * SVG Tiny 1.2 Fuzzer
 * 
 * http://www.w3.org/TR/SVGTiny12/
 * 
 */
class SVGTiny12Fuzz {

	/**
	 * Lazy execution - just instanciate the object
	 * 
	 * @param void
	 */
	public function __construct(){

		/**
		 * SVG Tiny elements array
		 */
		$elements = array(
			'a' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'target', 'transform', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'animate' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'animateColor' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'animateMotion' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keyPoints', 'keySplines', 'keyTimes', 'max', 'min', 'origin', 'path', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'rotate', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'mpath', 'switch', 'title')),
			'animateTransform' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'type', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'animation' => array( # SVG Tiny only #
				'attributes' => array('about', 'begin', 'class', 'content', 'datatype', 'dur', 'end', 'externalResourcesRequired', 'fill', 'focusHighlight', 'focusable', 'height', 'id', 'initialVisibility', 'max', 'min', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'preserveAspectRatio', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'syncBehavior', 'syncMaster', 'syncTolerance', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'audio' => array( # SVG Tiny only #
				'attributes' => array('about', 'begin', 'class', 'content', 'datatype', 'dur', 'end', 'externalResourcesRequired', 'id', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'syncBehavior', 'syncMaster', 'syncTolerance', 'systemLanguage', 'type', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'circle' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'fill', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'r', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'defs' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'fill', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'desc' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'discard' => array( # SVG Tiny only #
				'attributes' => array('about', 'begin', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'ellipse' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'fill', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rx', 'ry', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'font' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'horiz-adv-x', 'horiz-origin-x', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face', 'glyph', 'hkern', 'metadata', 'missing-glyph', 'switch', 'title')),
			'font-face' => array(
				'attributes' => array('about', 'accent-height', 'alphabetic', 'ascent', 'bbox', 'cap-height', 'class', 'content', 'datatype', 'descent', 'externalResourcesRequired', 'font-family', 'font-stretch', 'font-style', 'font-variant', 'font-weight', 'hanging', 'id', 'ideographic', 'mathematical', 'overline-position', 'overline-thickness', 'panose-1', 'property', 'rel', 'resource', 'rev', 'role', 'slope', 'stemh', 'stemv', 'strikethrough-position', 'strikethrough-thickness', 'typeof', 'underline-position', 'underline-thickness', 'unicode-range', 'units-per-em', 'widths', 'x-height', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face-src', 'metadata', 'switch', 'title')),
			'font-face-src' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face-uri', 'metadata', 'switch', 'title')),
			'font-face-uri' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'foreignObject' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('desc', 'metadata', 'svg', 'switch', 'title')),
			'g' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'glyph' => array(
				'attributes' => array('about', 'arabic-form', 'class', 'content', 'd', 'datatype', 'glyph-name', 'horiz-adv-x', 'id', 'lang', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'unicode', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'handler' => array( # SVG Tiny only #
				'attributes' => array('about', 'class', 'content', 'datatype', 'ev:event', 'externalResourcesRequired', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'type', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>', 'desc', 'metadata', 'switch', 'title')),
			'hkern' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'g1', 'g2', 'id', 'k', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'u1', 'u2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'image' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'opacity', 'preserveAspectRatio', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'type', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'line' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'x1', 'x2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y1', 'y2'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'linearGradient' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'gradientUnits', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'x1', 'x2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y1', 'y2'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'stop', 'switch', 'title')),
			'listener' => array( # SVG Tiny only #
				'attributes' => array('about', 'class', 'content', 'datatype', 'defaultAction', 'event', 'handler', 'id', 'observer', 'phase', 'propagate', 'property', 'rel', 'resource', 'rev', 'role', 'target', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'metadata' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'missing-glyph' => array(
				'attributes' => array('about', 'class', 'content', 'd', 'datatype', 'horiz-adv-x', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'mpath' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'path' => array(
				'attributes' => array('about', 'class', 'content', 'd', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'pathLength', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'polygon' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'points', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'polyline' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'points', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'prefetch' => array( # SVG Tiny only #
				'attributes' => array('about', 'bandwidth', 'class', 'content', 'datatype', 'id', 'mediaCharacterEncoding', 'mediaContentEncodings', 'mediaSize', 'mediaTime', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'radialGradient' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'gradientUnits', 'id', 'property', 'r', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'stop', 'switch', 'title')),
			'rect' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'fill', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rx', 'ry', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'script' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'type', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>', 'desc', 'metadata', 'switch', 'title')),
			'set' => array(
				'attributes' => array('about', 'attributeName', 'attributeType', 'begin', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'id', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'solidColor' => array( # SVG Tiny only #
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'stop' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'offset', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'switch', 'title')),
			'svg' => array(
				'attributes' => array('about', 'baseProfile', 'class', 'content', 'contentScriptType', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'playbackOrder', 'preserveAspectRatio', 'property', 'rel', 'resource', 'rev', 'role', 'snapshotTime', 'syncBehaviorDefault', 'syncToleranceDefault', 'timelineBegin', 'typeof', 'version', 'viewBox', 'width', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'zoomAndPan'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'switch' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'tbreak' => array( # SVG Tiny only #
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'text' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'editable', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rotate', 'systemLanguage', 'transform', 'typeof', 'x', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('<text>', 'a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title', 'tspan')),
			'textArea' => array( # SVG Tiny only #
				'attributes' => array('about', 'class', 'content', 'datatype', 'editable', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('<text>', 'a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'tbreak', 'title', 'tspan')),
			'title' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'tspan' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'use' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'video' => array( # SVG Tiny only #
				'attributes' => array('about', 'begin', 'class', 'content', 'datatype', 'dur', 'end', 'externalResourcesRequired', 'fill', 'focusHighlight', 'focusable', 'height', 'id', 'initialVisibility', 'max', 'min', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'overlay', 'preserveAspectRatio', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'syncBehavior', 'syncMaster', 'syncTolerance', 'systemLanguage', 'transform', 'transformBehavior', 'type', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title'))
		);
		$namespaces = array(
			'svg' => 'http://www.w3.org/2000/svg',
			'xlink' => 'http://www.w3.org/1999/xlink',
			'xhtml' => 'http://www.w3.org/1999/xhtml',
			'ev' => 'http://www.w3.org/2001/xml-events'
		);
		$events = array(
			'onunload', 'onabort', 'onerror', 'onresize', 'onscroll', 'onzoom',
			'onfocusin', 'onfocusout', 'onactivate', 'onclick', 'onmousedown', 
			'onmouseup', 'onmouseover', 'onmousemove', 'onmouseout', 'onload'
		);
		$colors = array(
			'red', 'blue', 'green', 'yellow'
		);
		$universal_attributes = array(
			'alignment-baseline', 'baseline-shift', 'clip', 'clip-path', 
			'clip-rule', 'color', 'color-interpolation', 
			'color-interpolation-filters', 'color-profile', 'color-rendering', 
			'cursor', 'direction', 'display', 'dominant-baseline', 
			'enable-background', 'fill', 'fill-opacity', 'fill-rule', 'filter', 
			'flood-color', 'flood-opacity', 'font-family', 'font-size', 
			'font-size-adjust', 'font-stretch', 'font-style', 'font-variant', 
			'font-weight', 'glyph-orientation-horizontal', 
			'glyph-orientation-vertical', 'image-rendering', 'kerning', 
			'letter-spacing', 'lighting-color', 'marker-end', 'marker-mid', 
			'marker-start', 'mask', 'opacity', 'overflow', 'pointer-events', 
			'shape-rendering', 'stop-color', 'stop-opacity', 'stroke', 
			'stroke-dasharray', 'stroke-dashoffset', 'stroke-linecap', 
			'stroke-linejoin', 'stroke-miterlimit', 'stroke-opacity', 
			'stroke-width', 'text-anchor', 'text-decoration', 'text-rendering', 
			'unicode-bidi', 'visibility', 'word-spacing', 'writing-mode', 
			'class', 'style', 'externalResourcesRequired', 'id', 'xml:base', 
			'xml:lang', 'xml:space', 'requiredFeatures', 'requiredExtensions', 
			'systemLanguage'	
		); 
		$xlink_attributes = array(
			'xlink:href', 'xlink:show', 'xlink:actuate', 'xlink:type', 
			'xlink:role', 'xlink:arcrole', 'xlink:title'
		);
		
		# set headers and echo SVG tag
		header('Content-Type: image/svg+xml');
		echo '<svg 
			xmlns="' . $namespaces['svg'] .'"
			xmlns:xlink="' . $namespaces['xlink'] . '"
			xmlns:xhtml="' . $namespaces['xhtml'] . '" 
			xmlns:ev="' . $namespaces['ev'] .'">';
			
		# iterate elements
		foreach($elements as $key => $value) {
			
			# init and formatting
			$attributes = "\r\n";
			$set = '';
			$animate = '';
			
			# merge in generic attributes and unify
			$value['attributes'] = array_merge(
				$value['attributes'], $universal_attributes, $xlink_attributes
			);
			$value['attributes'] = array_unique($value['attributes']);			
			
			# create payload
			foreach($value['attributes'] as $attribute) {
				
				#form set tags
				$set .= '<set attributeName="' . $attribute 
					. '" to="javascript:alert(\'' . $key . '-' . $attribute.'-via-set\')" />';

				#form animate tags
				$animate .= '<animate begin="0" attributeName="' . $attribute 
					. '" to="javascript:alert(\'' . $key . '-' . $attribute.'-via-animate\')" />';
				
				switch($attribute) {
					
					case 'ev:event' : # randomly choose an event
						$attributes .= ("\t" . $attribute . '="' 
							. $events[rand(0,count($events)-1)] . '" ' . "\r\n");	
						continue;
						
					case 'fill' : # randomly choose a color
						$attributes .= ("\t" . $attribute . '="' 
							. $colors[rand(0,count($colors)-1)] . '" ' . "\r\n");	
						continue;
						
					case 'xml:space' : # ignore xml:space
						continue;
						
					case 'id' : # ignore id
						continue;

					case 'xml:id' : # ignore xml:id
						continue;						
						
					case 'xlink:actuate' : # always onload 
						$attributes .= ("\t" . 'xlink:actuate="onLoad" ' . "\r\n");					
						continue;						
						
					case 'xlink:href' : # define external payload
						$attributes .= (''.$attribute.'="javascript:alert(\'' . 
							$key.'-'.$attribute.'\')" ' . "\r\n");	
						#$attributes .= ("\t" . $attribute . '="/test/test2.svg#' 
							#. $key . '-' . $attribute . '" ' . "\r\n");	
						continue;

					default: # randomly choose numeric value
						#$attributes .= ("\t" . $attribute . '="' 
							#. rand(0,100) . '" ' . "\r\n");
						$attributes .= (''.$attribute.'="javascript:alert(\'' . 
							$key.'-'.$attribute.'\')" ' . "\r\n");	

				}
			}
	
			#echo tag attribute combo
			echo '<' . $key . ' ' . $attributes . ' id="'.$key.'">' . $set . $animate 
				. '</' . $key . '>' . "\r\n";
			
			# NOT WORKING YET - see above
			echo '<x ev:event="load" ev:observer="' . $key 
				. '" ev:handler="/test/test2.svg#foo" />' . "\r\n";				
				
		}
		echo '</svg>';		
	}	
}

/**
 * SVG 1.1 Fuzzer
 * 
 * http://www.w3.org/TR/SVG/
 * 
 */
class SVG11Fuzz {

	/**
	 * Lazy execution - just instanciate the object
	 * 
	 * @param void
	 */
	public function __construct(){

		/**
		 * SVG Tiny elements array
		 */
		$elements = array(
			'a' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'target', 'transform', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'altGlyph' => array(
				'attributes' => array('x', 'y', 'dx', 'dy', 'glyphRef', 'format', 'rotate', 'xlink:href'),
				'children' => array()
			),
			'altGlyphDef' => array(
				'attributes' => array(), 
				'children' => array('glyphRef', 'altGlyphItem')
			),
			'altGyphItem' => array(
				'attributes' => array(), 
				'children' => array('glyphRef')			
			),
			'animate' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'animateColor' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'animateMotion' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keyPoints', 'keySplines', 'keyTimes', 'max', 'min', 'origin', 'path', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'rotate', 'systemLanguage', 'to', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'mpath', 'switch', 'title')),
			'animateTransform' => array(
				'attributes' => array('about', 'accumulate', 'additive', 'attributeName', 'attributeType', 'begin', 'by', 'calcMode', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'from', 'id', 'keySplines', 'keyTimes', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'type', 'typeof', 'values', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'circle' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'fill', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'r', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'clipPath' => array(
				'attributes' => array('transform', 'clipPathUnits'),
				'children' => array('desc', 'metadata', 'title', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect')
			),
			'color-profile' => array(
				'attributes' => array('local', 'name', 'rendering-intent', 'xlink:href'),
				'children' => array('desc', 'metadata', 'title')
			),
			'cursor' => array(
				'attributes' => array('x', 'y', 'xlink:href'),
				'children' => array('desc', 'metadata', 'title')
			),
			'defs' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'fill', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'definition-src' => array( # SVG Basic
				'attributes' => array('xlink:href'),
				'children' => array()
			), 
			'desc' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'ellipse' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'fill', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rx', 'ry', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'feBlend' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'in2', 'mode'),
				'children' => array('animate', 'set')
			),
			'feColorMatrix' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'order', 'kernelMatrix', 'divisor', 'bias', 'targetX', 'targetY', 'edgeMode', 'kernelUnitLength', 'preserveAlpha'),
				'children' => array('animate', 'set')			
			),
			'feComponentTransfer' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in'),
				'children' => array('feFuncA', 'feFuncB', 'feFuncG', 'feFuncR')			
			),
			'feComposite' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'in2','operator', 'k1', 'k2', 'k3', 'k4'),
				'children' => array('animate', 'set')			
			),
			'feConvolveMatrix' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'in2','operator', 'k1', 'k2', 'k3', 'k4'),
				'children' => array('animate', 'set')					
			),
			'feDiffuseLighting' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'surfaceScale', 'diffuseConstant', 'kernelUnitLength'),
				'children' => array('desc', 'metadata', 'title', 'fePointLight', 'feSpotLight')
			),
			'feDisplacementMap' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'in2', 'scale', 'xChannelSelector', 'yChannelSelector'),
				'children' => array('animate', 'set')				
			),
			'feDistantLight' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'azimith', 'elevation'),
				'children' => array('animate', 'set')				
			),
			'feFlood' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result'),
				'children' => array('animate', 'animateColor', 'set')				
			),
			'feFuncA' => array(
				'attributes' => array('type', 'tableValues', 'slope', 'intercept', 'amplitude', 'exponent', 'offset'),
				'children' => array('animate', 'set')
			),
			'feFuncB' => array(
				'attributes' => array('type', 'tableValues', 'slope', 'intercept', 'amplitude', 'exponent', 'offset'),
				'children' => array('animate', 'set')			
			),
			'feFuncG' => array(
				'attributes' => array('type', 'tableValues', 'slope', 'intercept', 'amplitude', 'exponent', 'offset'),
				'children' => array('animate', 'set')			
			),
			'feFuncR' => array(
				'attributes' => array('type', 'tableValues', 'slope', 'intercept', 'amplitude', 'exponent', 'offset'),
				'children' => array('animate', 'set')			
			),
			'feGaussianBlur' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'stdDeviation'),
				'children' => array('animate', 'set')				
			),
			'feImage' => array(
				'attributes' => array('preserveAspectRatio', 'xlink:href'),
				'children' => array('animate', 'animateTransform', 'set')			
			),
			'feMerge' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result'),
				'children' => array('feMergeNode'),
			),
			'feMergeNode' => array(
				'attribute' => array('in'),
				'children' => array('animate', 'set')
			),
			'feMorphology' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'operator', 'radius'),
				'children' => array('animate', 'set')					
			),
			'feOffset' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in', 'dx', 'dy'),
				'children' => array('animate', 'set')				
			),
			'fePointLight' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'z'),
				'children' => array('animate', 'set')				
			),
			'feSpecularLighting' => array(
				'attributes' => array(),
				'children' => array('desc', 'metadata', 'title', 'fePointLight', 'feSpotLight')
			),
			'feSpotLight' => array(
				'attributes' => array('x', 'y', 'z', 'pointsAtX', 'pointsAtY', 'pointsAtZ', 'specularExponent', 'limitingConeAngle'),
				'children' => array('animate', 'set')
			),
			'feTile' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'in'),
				'children' => array('animate', 'set')				
			),
			'feTurbulence' => array(
				'attributes' => array('x', 'y', 'width', 'height', 'result', 'baseFrequency', 'numOctaves', 'seed', 'stitchTiles', 'type'),
				'children' => array('animate', 'set')				
			),
			'filter' => array(
				'attributes' => array('class', 'style', 'externalResourcesRequired', 'x', 'y', 'width', 'height', 'filterRes', 'filterUnits', 'primitiveUnits', 'xlink:href'),
				'children' => array('desc', 'metadata', 'title', 'feBlend', 'feColorMatrix', 'feComponentTransfer', 'feComposite', 'feConvolveMatrix', 'feDiffuseLighting', 'feDisplacementMap', 'feFlood', 'feGaussianBlur', 'feImage', 'feMerge', 'feMorphology', 'feOffset', 'feSpecularLighting', 'feTile', 'feTurbulence', 'animate', 'set')
			),				
			'font' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'horiz-adv-x', 'horiz-origin-x', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face', 'glyph', 'hkern', 'metadata', 'missing-glyph', 'switch', 'title')),
			'font-face' => array(
				'attributes' => array('about', 'accent-height', 'alphabetic', 'ascent', 'bbox', 'cap-height', 'class', 'content', 'datatype', 'descent', 'externalResourcesRequired', 'font-family', 'font-stretch', 'font-style', 'font-variant', 'font-weight', 'hanging', 'id', 'ideographic', 'mathematical', 'overline-position', 'overline-thickness', 'panose-1', 'property', 'rel', 'resource', 'rev', 'role', 'slope', 'stemh', 'stemv', 'strikethrough-position', 'strikethrough-thickness', 'typeof', 'underline-position', 'underline-thickness', 'unicode-range', 'units-per-em', 'widths', 'x-height', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face-src', 'metadata', 'switch', 'title')),
			'font-face-format' => array(
				'attributes' => array('string'),
				'children' => array()
			),
			'font-face-name' => array(
				'attributes' => array('name'),
				'children' => array()			
			),				
			'font-face-src' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'font-face-uri', 'metadata', 'switch', 'title')),
			'font-face-uri' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'foreignObject' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('desc', 'metadata', 'svg', 'switch', 'title')),
			'g' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'glyph' => array(
				'attributes' => array('about', 'arabic-form', 'class', 'content', 'd', 'datatype', 'glyph-name', 'horiz-adv-x', 'id', 'lang', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'unicode', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'glyphRef' => array(
				'attributes' => array('x', 'y', 'dx', 'dy', 'glyphRef', 'format', 'xlink:href'),
				'children' => array()),
			'hkern' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'g1', 'g2', 'id', 'k', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'u1', 'u2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'image' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'opacity', 'preserveAspectRatio', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'type', 'typeof', 'width', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'line' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'x1', 'x2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y1', 'y2'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'linearGradient' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'gradientUnits', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'x1', 'x2', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y1', 'y2'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'stop', 'switch', 'title')),
			'marker' => array(
				'attributes' => array('viewBox', 'preserveAspectRatio', 'refX', 'refY', 'markerUnits', 'markerWidth', 'markerHeight', 'orient'),
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'desc', 'metadata', 'title', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect', 'defs', 'g', 'svg', 'symbol', 'use', 'linearGradient', 'radialGradient', 'a', 'altGlyphDef', 'clipPath', 'color-profile', 'cursor', 'filter', 'font', 'font-face', 'foreignObject', 'image', 'marker', 'mask', 'pattern', 'script', 'style', 'switch', 'text', 'view')),
			'mask' => array(
				'attributes' => array('class', 'style', 'externalResourcesRequired', 'x', 'y', 'width', 'height', 'maskUnits', 'maskContentUnits'),
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'desc', 'metadata', 'title', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect', 'defs', 'g', 'svg', 'symbol', 'use', 'linearGradient', 'radialGradient', 'a', 'altGlyphDef', 'clipPath', 'color-profile', 'cursor', 'filter', 'font', 'font-face', 'foreignObject', 'image', 'marker', 'mask', 'pattern', 'script', 'style', 'switch', 'text', 'view')),
			'metadata' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'missing-glyph' => array(
				'attributes' => array('about', 'class', 'content', 'd', 'datatype', 'horiz-adv-x', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'mpath' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'metadata', 'switch', 'title')),
			'path' => array(
				'attributes' => array('about', 'class', 'content', 'd', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'pathLength', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'pattern' => array(
				'attributes' => array('viewBox', 'preserveAspectRatio', 'x', 'y', 'width', 'height', 'patternUnits', 'patternContentUnits', 'patternTransform', 'xlink:href'),
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'desc', 'metadata', 'title', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect', 'defs', 'g', 'svg', 'symbol', 'use', 'linearGradient', 'radialGradient', 'a', 'altGlyphDef', 'clipPath', 'color-profile', 'cursor', 'filter', 'font', 'font-face', 'foreignObject', 'image', 'marker', 'mask', 'pattern', 'script', 'style', 'switch', 'text', 'view')),
			'polygon' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'points', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'polyline' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'points', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'radialGradient' => array(
				'attributes' => array('about', 'class', 'content', 'cx', 'cy', 'datatype', 'gradientUnits', 'id', 'property', 'r', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'stop', 'switch', 'title')),
			'rect' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'fill', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rx', 'ry', 'systemLanguage', 'transform', 'typeof', 'width', 'x', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'script' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'id', 'property', 'rel', 'resource', 'rev', 'role', 'type', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>', 'desc', 'metadata', 'switch', 'title')),
			'set' => array(
				'attributes' => array('about', 'attributeName', 'attributeType', 'begin', 'class', 'content', 'datatype', 'dur', 'end', 'fill', 'id', 'max', 'min', 'property', 'rel', 'repeatCount', 'repeatDur', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'restart', 'rev', 'role', 'systemLanguage', 'to', 'typeof', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('desc', 'handler', 'metadata', 'switch', 'title')),
			'stop' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'offset', 'property', 'rel', 'resource', 'rev', 'role', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'metadata', 'set', 'switch', 'title')),
			'style' => array(
				'attributes' => array('type', 'media', 'title'),
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'desc', 'metadata', 'title', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect', 'defs', 'g', 'svg', 'symbol', 'use', 'linearGradient', 'radialGradient', 'a', 'altGlyphDef', 'clipPath', 'color-profile', 'cursor', 'filter', 'font', 'font-face', 'foreignObject', 'image', 'marker', 'mask', 'pattern', 'script', 'style', 'switch', 'text', 'view')
			),
			'svg' => array(
				'attributes' => array('about', 'baseProfile', 'class', 'content', 'contentScriptType', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'height', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'playbackOrder', 'preserveAspectRatio', 'property', 'rel', 'resource', 'rev', 'role', 'snapshotTime', 'syncBehaviorDefault', 'syncToleranceDefault', 'timelineBegin', 'typeof', 'version', 'viewBox', 'width', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'zoomAndPan'), 
				'children' => array('a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'animation', 'audio', 'circle', 'defs', 'desc', 'discard', 'ellipse', 'font', 'font-face', 'foreignObject', 'g', 'handler', 'image', 'line', 'linearGradient', 'listener', 'metadata', 'path', 'polygon', 'polyline', 'prefetch', 'radialGradient', 'rect', 'script', 'set', 'solidColor', 'switch', 'text', 'textArea', 'title', 'use', 'video')),
			'switch' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'symbol' => array(
				'attributes' => array('preserveAspectRatio', 'viewBox'),
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'set', 'desc', 'metadata', 'title', 'circle', 'ellipse', 'line', 'path', 'polygon', 'polyline', 'rect', 'defs', 'g', 'svg', 'symbol', 'use', 'linearGradient', 'radialGradient', 'a', 'altGlyphDef', 'clipPath', 'color-profile', 'cursor', 'filter', 'font', 'font-face', 'foreignObject', 'image', 'marker', 'mask', 'pattern', 'script', 'style', 'switch', 'text', 'view')
			),
			'text' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'editable', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'rotate', 'systemLanguage', 'transform', 'typeof', 'x', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('<text>', 'a', 'animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title', 'tspan')),
			'textPath' => array(),
			'title' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'id', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array('<text>')),
			'tref' => array(),
			'tspan' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'typeof', 'xml:base', 'xml:id', 'xml:lang', 'xml:space'), 
				'children' => array()),
			'use' => array(
				'attributes' => array('about', 'class', 'content', 'datatype', 'externalResourcesRequired', 'focusHighlight', 'focusable', 'id', 'nav-down', 'nav-down-left', 'nav-down-right', 'nav-left', 'nav-next', 'nav-prev', 'nav-right', 'nav-up', 'nav-up-left', 'nav-up-right', 'property', 'rel', 'requiredExtensions', 'requiredFeatures', 'requiredFonts', 'requiredFormats', 'resource', 'rev', 'role', 'systemLanguage', 'transform', 'typeof', 'x', 'xlink:actuate', 'xlink:arcrole', 'xlink:href', 'xlink:role', 'xlink:show', 'xlink:title', 'xlink:type', 'xml:base', 'xml:id', 'xml:lang', 'xml:space', 'y'), 
				'children' => array('animate', 'animateColor', 'animateMotion', 'animateTransform', 'desc', 'discard', 'handler', 'metadata', 'set', 'switch', 'title')),
			'view' => array(
				'attributes' => array('viewBox', 'preserveAspectRatio', 'zoomAndPan', 'viewTarget'),
				'children' => array('desc', 'metadata', 'title')
			),
			'vkern' => array(
				'attributes' => array('u1', 'g1', 'u2', 'g2', 'k'),
				'children' => array()
			)
		);
		$namespaces = array(
			'svg' => 'http://www.w3.org/2000/svg',
			'xlink' => 'http://www.w3.org/1999/xlink',
			'xhtml' => 'http://www.w3.org/1999/xhtml',
			'ev' => 'http://www.w3.org/2001/xml-events'
		);
		$events = array(
			'onunload', 'onabort', 'onerror', 'onresize', 'onscroll', 'onzoom',
			'onfocusin', 'onfocusout', 'onactivate', 'onclick', 'onmousedown', 
			'onmouseup', 'onmouseover', 'onmousemove', 'onmouseout', 'onload'
		);
		$colors = array(
			'red', 'blue', 'green', 'yellow'
		);
		$universal_attributes = array(
			'alignment-baseline', 'baseline-shift', 'clip', 'clip-path', 
			'clip-rule', 'color', 'color-interpolation', 
			'color-interpolation-filters', 'color-profile', 'color-rendering', 
			'cursor', 'direction', 'display', 'dominant-baseline', 
			'enable-background', 'fill', 'fill-opacity', 'fill-rule', 'filter', 
			'flood-color', 'flood-opacity', 'font-family', 'font-size', 
			'font-size-adjust', 'font-stretch', 'font-style', 'font-variant', 
			'font-weight', 'glyph-orientation-horizontal', 
			'glyph-orientation-vertical', 'image-rendering', 'kerning', 
			'letter-spacing', 'lighting-color', 'marker-end', 'marker-mid', 
			'marker-start', 'mask', 'opacity', 'overflow', 'pointer-events', 
			'shape-rendering', 'stop-color', 'stop-opacity', 'stroke', 
			'stroke-dasharray', 'stroke-dashoffset', 'stroke-linecap', 
			'stroke-linejoin', 'stroke-miterlimit', 'stroke-opacity', 
			'stroke-width', 'text-anchor', 'text-decoration', 'text-rendering', 
			'unicode-bidi', 'visibility', 'word-spacing', 'writing-mode', 
			'class', 'style', 'externalResourcesRequired', 'id', 'xml:base', 
			'xml:lang', 'xml:space', 'requiredFeatures', 'requiredExtensions', 
			'systemLanguage'	
		); 
		$xlink_attributes = array(
			'xlink:href', 'xlink:show', 'xlink:actuate', 'xlink:type', 
			'xlink:role', 'xlink:arcrole', 'xlink:title'
		);
		
		# set headers and echo SVG tag
		header('Content-Type: image/svg+xml');
		echo '<svg 
			xmlns="' . $namespaces['svg'] .'"
			xmlns:xlink="' . $namespaces['xlink'] . '"
			xmlns:xhtml="' . $namespaces['xhtml'] . '" 
			xmlns:ev="' . $namespaces['ev'] .'">';
			
		# iterate elements
		foreach($elements as $key => $value) {
			
			# init and formatting
			$attributes = "\r\n";
			$set = '';
			$animate = '';
			
			# merge in generic attributes and unify
			$value['attributes'] = array_merge(
				$value['attributes'], $universal_attributes, $xlink_attributes
			);
			$value['attributes'] = array_unique($value['attributes']);
			
			# create payload
			foreach($value['attributes'] as $attribute) {

				#form set tags
				$set .= '<set attributeName="' . $attribute 
					. '" to="javascript:alert(\'' . $key . '-' . $attribute.'-via-set\')" />';
				
				#form animate tags
				$animate .= '<animate begin="0" attributeName="' . $attribute 
					. '" to="javascript:alert(\'' . $key . '-' . $attribute.'-via-animate\')" />';
				
				switch($attribute) {
					
					case 'ev:event' : # randomly choose an event
						$attributes .= ("\t" . $attribute . '="' 
							. $events[rand(0,count($events)-1)] . '" ' . "\r\n");	
						continue;
						
					case 'fill' : # randomly choose a color
						$attributes .= ("\t" . $attribute . '="' 
							. $colors[rand(0,count($colors)-1)] . '" ' . "\r\n");	
						continue;
						
					case 'xml:space' : # ignore xml:space
						continue;

					case 'id' : # ignore id
						continue;

					case 'xml:id' : # ignore xml:id
						continue;
						
					case 'xlink:actuate' : # always onload 
						$attributes .= ("\t" . 'xlink:actuate="onLoad" ' . "\r\n");					
						continue;						
						
					case 'xlink:href' : # define external payload
						$attributes .= (''.$attribute.'="javascript:alert(\'' . 
							$key.'-'.$attribute.'\')" ' . "\r\n");	
						#$attributes .= ("\t" . $attribute . '="/test/test2.svg#' 
						#	. $key . '-' . $attribute . '" ' . "\r\n");	
						continue;

					default: # randomly choose numeric value
						#$attributes .= ("\t" . $attribute . '="' 
							#. rand(0,100) . '" ' . "\r\n");
						$attributes .= (''.$attribute.'="javascript:alert(\'' . 
							$key.'-'.$attribute.'\')" ' . "\r\n");	
				
				}
			}
	
			#echo tag attribute combo
			echo '<' . $key . ' ' . $attributes . ' id="'.$key.'">' . $set . $animate 
				. '</' . $key . '>' . "\r\n";
				
			echo '<x ev:event="load" ev:observer="' . $key 
				. '" ev:handler="javascript:alert(\''.$key.'-via-handler\')" />' . "\r\n";				
		}
		echo '</svg>';		
	}	
}

/**
 * Uncomment 1) or 2) to execute fuzzer
 */
new SVGTiny12Fuzz(); #1
#new SVG11Fuzz(); #2