<?php
class Article {
  public $title;
  public $date;
  public $content;
  public $image;

  function __construct($title, $date, $content, $image) {
    $this->title = $title;
    $this->date = $date;
    $this->content = $content;
    $this->image = $image;
  }

  function get_nice_date() {
    return date('d/m à H\hi', $this->date);
  }
}

$posts = array(
  new Article(
    'Article cool',
    1485768567,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.',
    'http://placehold.it/200x200'
  ),
  new Article(
    'Deuxième article',
    1485854967,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.',
    'http://placehold.it/200x200'
  ),
  new Article(
    'Super titre',
    1423046005,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.',
    'http://placehold.it/200x200'
  ),
  new Article(
    'Lorem Ipsum',
    1425378805,
    'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.',
    'http://placehold.it/200x200'
  )
);

// to push new one in the list
$one_more = new Article(
	'Le dernier',
	1454495605,
	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non purus tristique, feugiat mauris eu, pulvinar est. Etiam tincidunt malesuada velit in sollicitudin.',
	'http://placehold.it/200x200'
);

$posts[] = $one_more;
