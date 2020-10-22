{extends file="layouts/dashboard.tpl"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						{if $is_admin}
							Semua Usulan
						{else}
							Usulan Saya
						{/if}
					</h6>
				</div>
				<div class="card-body">
					<a href="/upload" class="btn btn-success btn-icon-split mb-2">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Unggah Dokumen
						</div>
					</a>
					<hr>

					{if $is_admin}						
						<form class="d-flex" method="GET">
							<div class="form-group mr-3">
								<label for="id_pengusul">Pengusul</label>
								<select name="id_pengusul" id="id_pengusul" class="form-control">
									<option 
										value="" 
										{if empty($this->input->get('id_pengusul'))}
											selected
										{/if}>
									</option>
									{foreach $this->db->get('users')->result() as $user}
										<option 
											value="{$user->id}"
											{if $this->input->get('id_pengusul') === $user->id}
												selected
											{/if}>
											{$user->first_name} {$user->last_name}
										</option>
									{/foreach}
								</select>
							</div>
							<div class="form-group mr-3">
								<label for="id_standar">Standar</label>
								<select name="id_standar" id="id_standar" class="form-control">
									<option
										value=""
										{if empty($this->input->get('id_standar'))}
											selected
										{/if}>
									</option>
									{foreach $this->db->get('standar')->result() as $standar}
										<option
											value="{$standar->id}"
											{if $this->input->get('id_standar') === $standar->id}
												selected
											{/if}>{$standar->nama}
										</option>
									{/foreach}
								</select>
							</div>
							<div class="form-group">
								<label class="invisible">a</label>
								<div>
									<button type="submit" class="btn btn-primary btn-icon-split">
										<div class="icon text-white-50">
											<div class="fas fa-filter"></div>
										</div>
										<div class="text">
											Saring
										</div>
									</button>
								</div>
							</div>
						</form>
					{/if}

					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Standar</th>
									<th>Pengusul</th>
									<th>Dokumen</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								{foreach $usulan as $u}
									<tr>
										<td>{$u->id}</td>
										<td style="white-space: nowrap">{$u->standar->nama}</td>
										<td style="white-space: nowrap">{$u->pengusul->first_name} {$u->pengusul->last_name}</td>
										<td class="text-center">
											<a href="{$u->dokumen->path}" class="btn btn-sm btn-dark">
												Unduh
											</a>
										</td>
										<td style="white-space: nowrap">{$u->tanggal_usulan}</td>
										<td style="white-space: nowrap">
											<a href="/usulan/show/{$u->id}" class="btn btn-sm btn-primary">Lihat</a>

											<a href="/upload/edit/{$u->id}" class="btn btn-sm btn-primary">Edit</a>

											{form_open('/usulan/delete', 'class="d-inline"')}
												<input type="hidden" name="id" value="{$u->id}">
												<button type="submit" class="btn btn-sm btn-confirm btn-danger">Hapus</button>
											{form_close()}
										</td>
									</tr>
								{foreachelse}
									<tr>
										<td colspan="6" class="text-center">Tidak ada data</td>
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
