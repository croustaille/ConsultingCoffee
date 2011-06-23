<?php // Vars: $cv
echo _open('div.clearfix');  
 echo $cv;
// Wrap the title in a H1  
echo _tag('h1.t_big', $cv->title);  
 
// Open a P tag to display some article infos  

 
// render the article image.  
// scale it to 200px width and height.  
// give it the "image" CSS class.  
echo _tag('h1','Availability date: '.$cv->datedisponibilite);

// render article body processed with markdown.  
echo markdown($cv->description);  


echo _tag('h1','Rate: '.$cv->tarif);

echo _close('div');  
