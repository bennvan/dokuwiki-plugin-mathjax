<?php
/**
 * Default settings for the mathjax plugin
 *
 * @author Mark Liffiton <liffiton@gmail.com>
 */


$conf['url'] = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js';
$conf['config'] = 'MathJax = {
    tex: {
        inlineMath: [ ["$","$"], ["\\\\(","\\\\)"] ],
        displayMath: [ ["$$","$$"], ["\\\\[","\\\\]"] ],
        processEscapes: true,
        tags: "ams"
    },
    chtml: {
        scale: 1,
        matchFontHeight: true, 
        mtextInheritFont: true,     
        merrorInheritFont: true
    }
};';
$conf['configfile'] = '';
$conf['asciimath'] = 0;
$conf['mathtags'] = '';

