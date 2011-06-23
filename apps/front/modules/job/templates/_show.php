<?php // Vars: $job
echo _open('div.clearfix');  
 
// Wrap the title in a H1  
echo _tag('h1.t_big', $job->title);  
 
// Open a P tag to display some article infos  

 
// render the article image.  
// scale it to 200px width and height.  
// give it the "image" CSS class.  
echo _tag('h1','Country: '.$job->country);
echo _tag('h1','City: '.$job->city);


// render article body processed with markdown.  
echo markdown($job->description);  
 
echo mail_to($job->Author->email,'Contact ' .$job->Author->society);

echo _close('div');  