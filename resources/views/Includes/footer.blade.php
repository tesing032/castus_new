<div class="footer">

				<div class="container">
					<div class="footer_inner">
						<div class="footer_item">
							<img src="{{ Voyager::image(setting('site.logo')) }}">
						</div>
						<div class="footer_item">
							<h3>Flýtileiðir</h3>
							<ul>
                                {!!menu('Footer')!!}
								
							</ul>
						</div>
						<div class="footer_item">
                            {!!setting('site.footer-second')!!}
							<!-- -->
						</div>
						<div class="footer_item">
							{!!setting('site.footer-third')!!}
						</div>
					</div>
					<div class="footer_social">
						<a href="javascript:void(0)"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
					</div>
					<div class="footer_copyright">
						<p>©2021 Mánar ehf</p>
					</div>
				</div>
				
			</div>