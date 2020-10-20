<?php 

// $filter = array('region'=>$name); 

$categories = get_categories(); 
foreach ($categories as $cat) 
{ 
    if($cat->parent < 1) 
    { 
    $cat_name = $cat->cat_name; 
    $catid = get_cat_ID( $cat_name ); 
    echo $cat_name. '<br/>'; 

    $args=array( 
      'taxonomy' => 'taxonomy_term', 
      'orderby' => 'name', 
      'order' => 'ASC', 
      'child_of' => $catid 
      ); 
    $categories=get_categories($args); 
      foreach($categories as $category) {  
        echo '<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a><br/>'; 
        }  

    } 
} 

?>




//listar categorias

<?php
  $categories = get_categories(array('type' => 'villa_imperial'));
  foreach($categories as $category):
?>
<?php
echo '<a  class="product-list__categories-link product-list__categories-link filter " data-group="' . str_replace(" ", "-", $category->slug) . '" class="product-list__categories-item">' . $category->name . '</a>';
?>
<?php
  endforeach;
?>







// lista com exclusoes
 <?php $title = get_the_title();?>
            <?php
                    $categories = get_categories(array('exclude' => ['10', '8'], 'orderby' => 'name', 'order' => 'ASC'));
                    foreach ($categories as $category) {
                        echo '<a  class="product-list__categories-link product-list__categories-link filter " data-group="' . str_replace(" ", "-", $category->slug) . '" class="product-list__categories-item">' . $category->name . '</a>';
                    }
                    ?>