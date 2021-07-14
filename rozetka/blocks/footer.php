<footer>
	<div class="footer-head">
		<div class="caption">Скачивайте наши приложения</div>
		<div class="apps">
			<a target="_blank" href="https://play.google.com/store/apps/details/?id=ua.com.rozetka.shop&amp;referrer=utm_source%3Dfullversion%26utm_medium%3Dsite%26utm_campaign%3Dfullversion"><img src="svg/button-google-play-ru.svg" alt=""></a>
			<a target="_blank" href="https://itunes.apple.com/app/apple-store/id740469631/?pt=3132803&amp;ct=fullversion&amp;at=1000l3MB&amp;mt=8"><img src="svg/button-appstore-ru.svg" alt=""></a>
		</div>
	</div>
</footer>

<?php include 'blocks/modal-login.php' ?>

<a href="#" class="arrow-up">🠑</a>

<script>
document.querySelectorAll('.js-open-modal').forEach(function(el){
    el.addEventListener('click', function(e){
    	if(e.target !== this) return false
        var modal = document.getElementById(this.dataset.target)
    	
    	if(modal.classList.contains('active')){
    		setTimeout(function(){modal.classList.remove('active')}, 400)
    		modal.classList.add('fade')
    	}else{
    		modal.classList.remove('fade')
    		modal.classList.add('active')
    	}
    })
})
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>