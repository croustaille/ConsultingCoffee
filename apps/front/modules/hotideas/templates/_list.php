<?php // Vars: $hotideasPager

echo $hotideasPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($hotideasPager as $hotideas)
{
  echo _open('li.element');

   echo _tag('h2.t_medium', _link($hotideas));  
    echo markdown($hotideas->extract, '.extract');  
 
    // in a P tag, we put some infos about the hotideas  
    echo _tag('p.article_infos',  
 
      // creation date of the hotideas, formatted with a symfony helper  
     
      // hotideas author  
      _tag('span', $hotideas->Author).  
      ' | '.  
      // another link to the article, with the "Read more" translated text  
      _link($hotideas)->text(__('Read more...'))  
    );  

  echo _close('li');
}

echo _close('ul');

echo $hotideasPager->renderNavigationBottom();