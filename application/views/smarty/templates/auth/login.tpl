{extends 'layouts/app.tpl'}

{assign var="body_classes" value=['bg-gradient-primary'] scope='parent'}

{block 'content'}
	<div class="container">
		<div class="row justify-content-center">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">
										Repositori Akreditasi <br>
										<small>Fakultas Keguruan dan Ilmu Pengetahuan</small>
									</h1>
								</div>
								{form_open(NULL, 'class="user"')}
									{include 'components/global/alert.tpl'}

									<div class="form-group text-dark">
										<small>
											{lang('login_identity_label', 'identity')}
										</small>
										<input type="text" name="identity" id="identity" value="{set_value(identity)}" class="bg-light form-control form-control-user {if form_error('identity') || isset($message)}is-invalid{/if}">
										<small>{form_error('identity')}</small>
									</div>
									<div class="form-group">
										<small>
											{lang('login_password_label', 'password')}
										</small>
										<input type="password" name="password" class="bg-light form-control form-control-user {if form_error('password') || isset($message)}is-invalid{/if}">
										<small>{form_error('password')}</small>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="remember" name="remember">
											<label class="custom-control-label" for="remember">Ingat saya</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								{form_close()}

								<div class="text-center mt-3">
									<a class="small" href="/forgot-password.html">Lupa Password?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
