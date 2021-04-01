<script type="text/javascript">
	jQuery(document).ready(function ($){
	$('.add_slider_item').on('click',function (event){
	    var wrapper = $('.sliders-item-wrapper');
	    var item = '\t<p>\n' +
            '\t\t<input style="width: 90%;direction:ltr;" type="text" name="sliders[]">\n' +
            '\t\t<a class="remove_slider_item" href="#"><span class="dashicons dashicons-dismiss"></span></a>\n' +
        '\t</p>';
	    event.preventDefault();
	    wrapper.append(item);
	})
	$(document).on('click', '.remove_slider_item',function (event){
	    event.preventDefault();
        var $this = $(this);
        $this.parent().slideUp();
        });
	});
</script>
<p>
	<a href="#" class="add_slider_item">اضافه کردن آیتم</a>
</p>
<div class="sliders-item-wrapper">
    <?php if (isset($slider_images) && count($slider_images) > 0): ?>
        <?php foreach ($slider_images as $slider_image): ?>
        <p>
            <input style="width: 90%;direction:ltr;" type="text" name="sliders[]" value="<?php echo $slider_image ?>">
            <a class = "remove_slider_item" href="#"><span class="dashicons dashicons-dismiss"></span></a>
        </p>
            <?php endforeach; ?>
    <?php else: ?>
        <p>
            <input style="width: 90%;direction:ltr;" type="text" name="sliders[]">
            <a class = "remove_slider_item" href="#"><span class="dashicons dashicons-dismiss"></span></a>
        </p>
    <?php endif; ?>
</div>