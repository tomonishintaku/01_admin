<script src="/js/readmore.js"></script> 
<script src="/js/imagelightbox.min.js"></script> 
<script>
	                 $( function()
	                 {
	                     $( 'a' ).imageLightbox();
	                 });
</script> 
<script>
$(function () {
     $('article.concepts').readmore({
        speed: 300,
          collapsedHeight: 194,
          moreLink: '<a href="#"><i class="fa fa-chevron-circle-down"></i>Read More</a>',
          lessLink: '<a href="#"><i class="fa fa-chevron-circle-up"></i>Close</a>'
     });
});
</script>