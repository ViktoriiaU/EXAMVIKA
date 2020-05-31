<div class="container_menu mobile-hidden">
	<a href="/"><div class="menu_menu-item menu_menu-item--active">Весь товар</div></a>
	<?php
		foreach($categories as $category) {
			echo '<a href="' . \yii\helpers\Url::to(['view', 'id' => $category->category_id]) . '"><div class="menu_menu-item">'.$category->category_name . '</div></a>';
		}
	?>
</div>
<div class="container_content">
	<div class="content_catalog">
		<?php foreach($products as $product): ?>
			<div class="catalog_catalog-item">
				<a href="<?php echo '/images/'.$product->product_image; ?>" data-lightbox="<?php echo $product->product_image; ?>"><div class="catalog-item_image" style="background-image: url(<?php echo '/images/'.$product->product_image; ?>)"></div></a>
				<div class="catalog-item_price"><?php echo $product->product_price . ' €'; ?></div>
				<div class="catalog-item_text"><?php echo $product->product_name; ?></div>
				<div class="catalog-item_description"><?php echo $product->product_description; ?></div>
			</div>
		<?php endforeach; ?>
	</div>
</div>