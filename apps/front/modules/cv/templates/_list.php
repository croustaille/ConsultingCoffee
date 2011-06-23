<?php // Vars: $cvPager

echo $cvPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($cvPager as $cv)
{
  echo _open('li.element');

    echo _link($cv);

  echo _close('li');
}

echo _close('ul');

echo $cvPager->renderNavigationBottom();