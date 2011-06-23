<?php // Vars: $hotideasPager

echo $hotideasPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($hotideasPager as $hotideas)
{
  echo _open('li.element');

    echo _link($hotideas);

  echo _close('li');
}

echo _close('ul');

echo $hotideasPager->renderNavigationBottom();