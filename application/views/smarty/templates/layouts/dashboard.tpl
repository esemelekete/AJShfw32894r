{extends file="layouts/app.tpl"}

{block name=content}
	<div id="wrapper">
		{include file="components/sidebar.tpl"}

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				{include file="components/navbar.tpl" user=$this->ion_auth->user()->row()}

				<div class="container-fluid">
					{if $alert = $this->session->flashdata('alert')}
						<div class="row">
							<div class="col-12">
								<div class="alert alert-{$alert['type']}">
									{$alert['message']}
								</div>
							</div>
						</div>
					{/if}

					{block name=admin_content}{/block}
				</div>
			</div>
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Your Website 2020</span>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Apakah Anda yakin ingin keluar dari sistem?</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batalkan</button>
					{form_open('/logout')}
						<a class="btn btn-danger" href="/" id="logout">Ya, Keluar</a>
					{form_close()}
				</div>
			</div>
		</div>
	</div>

	<script>
		document.getElementById('logout').addEventListener('click', function(e) {
			e.preventDefault()

			e.target.parentNode.submit()
		})
	</script>
{/block}
