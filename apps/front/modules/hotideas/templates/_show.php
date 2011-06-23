<?php // Vars: $hotideas

echo _open('div.clearfix');  
 
// Wrap the title in a H1  
echo _tag('h1.t_big', $hotideas->title);  
 
// Open a P tag to display some article infos  

 
// render the article image.  
// scale it to 200px width and height.  
// give it the "image" CSS class.  



// render article body processed with markdown.  
echo markdown($hotideas->body);  
 

echo _close('div');  