	<!-- Contact Two Start -->

	<div class="contact__two section-padding">
		<div class="container">
			<div class="row gy-4 align-items-center">
				<div class="col-xl-6">
					<div class="contact__two-content">
						<div class="contact__two-title">
							<span class="subtitle-one">Contate-nos</span>
							<h2>Você tem alguma duvida?</h2>
							<p>Para o seu carro, oferecemos todos os serviços: aconselhamento, reparos e manutenção. Somos a escolha preferida de muitos proprietários de veículos porque...</p>
						</div>
						<div class="contact__two-form">
							@if(session('sucesso'))
							<div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 5px;">
								{{ session('sucesso') }}
							</div>
							@endif
							<form action="{{ route('contato.enviar') }}" method="POST">
								@csrf
								<div class="row gy-4 mb-4">
									<div class="col-xl-6">
										<input type="text" name="name" placeholder="Your Name" required>
									</div>
									<div class="col-xl-6">
										<input type="email" name="email" placeholder="Your E-mail" required>
									</div>
									<div class="col-xl-6">
										<input type="tel" name="phone" placeholder="Phone Number">
									</div>
									<div class="col-xl-6">
										<input type="text" name="subject" placeholder="Subject" required>
									</div>
								</div>
								<div>
									<textarea name="message" placeholder="Your Message" required></textarea>
								</div>

								<button type="submit" class="btn-two">
									Enviar agora <i class="fas fa-chevron-right"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="contact__two-contact-info">
						<div class="contact__two-single-info">
							<div class="contact__two-single-info-icon">
								<img src="{{ asset('colegasdev/images/icones/email-1572-svgrepo-com.svg') }}" alt="image">
							</div>
							<div class="contact__two-single-info-content">
								<a href="mailto:colegasdev@gmail.com" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
									<h4>Email</h4>
									<span>colegasdev@gmail.com</span>
								</a>
							</div>
						</div>
						<div class="contact__two-single-info">
							<div class="contact__two-single-info-icon">
								<img src="{{ asset('colegasdev/images/icones/telephone-receiver-material-svgrepo-com.svg') }}" alt="image">
							</div>
							<div class="contact__two-single-info-content">
								<a href="tel:1140029822" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
									<h4>Contatos</h4>
									<span>(11) 4002-9822</span>
								</a>
							</div>
						</div>
						<div class="contact__two-single-info">
							<div class="contact__two-single-info-icon">
								<img src="{{ asset('colegasdev/images/icones/time-svgrepo-com.svg') }}" alt="image">
							</div>
							<div class="contact__two-single-info-content">
								<h4>Data</h4>
								<span>Segunda à Sexta <br> das 08:00 às 12:00</span>
							</div>
						</div>
						<div class="contact__two-single-info">
							<div class="contact__two-single-info-icon">
								<img src="{{ asset('colegasdev/images/icones/address-svgrepo-com.svg') }}" alt="image">
							</div>
							<div class="contact__two-single-info-content">
								<a href="https://maps.app.goo.gl/HytkZiALiDp1EqUBA" target="_blank" style="text-decoration: none; color: inherit; display: block; width: 100%; height: 100%;">
									<h4>Localizaçâo</h4>
									<span>Avenida Marechal Tito, 1500 <br> São Miguel Paulista, São Paulo</span>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Two End -->