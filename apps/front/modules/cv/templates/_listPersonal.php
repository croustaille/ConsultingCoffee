<?php // Vars: $cvPager

echo $cvPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($cvPager as $cv)
{
  echo _open('li.element');

  echo _tag('h2.t_medium', _link($cv));  
  
  echo markdown(substr($cv->description,0,220).'...', '.description');  

  echo _close('li');
}

echo _close('ul');

echo $cvPager->renderNavigationBottom();