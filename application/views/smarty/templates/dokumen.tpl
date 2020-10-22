{extends file="layouts/dashboard.tpl"}

{assign var="is_admin" value=$this->ion_auth->is_admin()}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Daftar Dokumen
					</h6>
				</div>
				<div class="card-body">
					<a href="/dokumen/create" class="btn btn-success btn-icon-split mb-3">
						<div class="icon text-white-50">
							<div class="fas fa-plus"></div>
						</div>
						<div class="text">
							Unggah Dokumen
						</div>
					</a>
					{if $is_admin}						
						<hr>
						<form class="d-flex form-inline">
							<div class="mr-3 mb-3">
								<i class="fas fa-filter mr-1"></i>
								Saring
							</div>
							<select name="id_ts" class="form-control mr-3 mb-3">
								<option value="" {if empty($this->input->get('id_ts'))}selected{/if} disabled>TS</option>
								<option value="">Semua</option>
								{foreach from=$ts item=$t}
									<option value="{$t->id}" {if $this->input->get('id_ts') === $t->id}selected{/if}>- {$t->ta_1}/{$t->ta_2}</option>
								{/foreach}
							</select>
							<select name="id_kriteria" class="form-control mr-3 mb-3">
								<option value="" {if empty($this->input->get('id_kriteria'))}selected{/if} disabled>Kriteria</option>
								<option value="">Semua</option>
								{foreach from=$kriteria item=$k}
									<option value="{$k->id}" {if $this->input->get('id_kriteria') === $k->id}selected{/if}>{$k->id}. {$k->nama}</option>
								{/foreach}
							</select>
							<select name="id_user" class="form-control mr-3 mb-3">
								<option value="" {if empty($this->input->get('id_user'))}selected{/if} disabled>Pengguna</option>
								<option value="">Semua</option>
								{foreach from=$users item=$user}
									<option value="{$user->id}" {if $this->input->get('id_user') === $user->id}selected{/if}>- {$user->first_name} {$user->last_name}</option>
								{/foreach}
							</select>
							<button type="submit" class="btn btn-primary mb-3">Terapkan</button>
						</form>
					{/if}
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Kriteria</th>
									<th>Pengunggah</th>
									<th>Dokumen</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								{foreach from=$dokumen item=$d}
									<tr>
										<td>{$d->id_kriteria}. {$d->nama_kriteria}</td>
										<td>{$d->first_name} {$d->last_name}</td>
										<td>
											<a href="{$d->path}" class="btn btn-sm btn-dark">Unduh</a>
										</td>
										<td>
											<a href="/dokumen/show/{$d->id}" class="btn btn-sm btn-primary">Lihat</a>
											<a href="/dokumen/edit/{$d->id}" class="btn btn-sm btn-primary">Edit</a>
											{form_open('/dokumen/delete', 'class="d-inline"')}
												<input type="hidden" name="id" value="{$d->id}">
												<button type="submit" class="btn btn-confirm btn-sm btn-danger">Hapus</button>
											{form_close()}
										</td>
									</tr>
								{foreachelse}
									<tr>
										<td colspan="5" class="text-center">Tidak ada data</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
					{$this->pagination->create_links()}
				</div>
			</div>
		</div>
	</div>
{/block}
