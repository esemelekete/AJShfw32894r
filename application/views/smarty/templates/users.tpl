{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Manajemen Pengguna"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Semua Pengguna
					</h6>
				</div>
				<div class="card-body">
					<a href="/users/create" class="btn btn-success btn-icon-split mb-4">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Tambahkan pengguna
						</div>
					</a>

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Email</th>
									<th>Hak akses</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								{foreach from=$users item=$user}
									<tr>
										<td>{$user->first_name} {$user->last_name}</td>
										<td>{$user->email}</td>
										<td>
											{if $this->ion_auth->get_users_groups($user->id)->row()->name === 'generic'}
												Umum
											{else}
												Admin
											{/if}
										</td>
										<td>
											<a href="/users/edit/{$user->id}" class="btn btn-sm btn-primary">
												Edit
											</a>
											{form_open('/users/delete', 'class="d-inline"')}
												<input type="hidden" name="id" value="{$user->id}">
												<button type="submit" class="btn btn-confirm btn-sm btn-danger">
													Hapus
												</button>
											{form_close()}
										</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
					<div class="d-flex justify-content-center">
						{$this->pagination->create_links()}
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
