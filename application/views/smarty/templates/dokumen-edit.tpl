{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Unggah Dokumen"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Dokumen Baru
					</h6>
				</div>
				<div class="card-body">
					{form_open(NULL, 'enctype="multipart/form-data"')}
						<div class="row justify-content-center">
							<div class="col-md-8 col-lg-5">
								<div class="form-group">
									<label for="id_ts">TS</label>
									<select name="id_ts" id="id_ts" class="form-control {if form_error('id_ts')}is-invalid{/if}">
										<option value="" {if empty(set_value('id_ts'))}selected{/if} disabled>Pilih TS</option>
										{foreach $ts as $t}
											<option value="{$t->id}" {if $selected_ts === $t->id}selected{/if}>{$t->ta_1}/{$t->ta_2}</option>
										{/foreach}
									</select>
									{if form_error('id_ts')}
										<small class="text-danger">{form_error('id_ts')}</small>
									{/if}	
								</div>
								<div class="form-group">
									<label for="id_kriteria">Kriteria</label>
									{if $this->ion_auth->is_admin()}
										<select name="id_kriteria" id="id_kriteria" class="form-control {if form_error('id_kriteria')}is-invalid{/if}">
											<option value="" {if empty(set_value('id_kriteria'))}selected{/if} disabled>Pilih kriteria</option>
											{foreach $kriteria as $k}
												<option value="{$k->id}" {if $selected_kriteria === $k->id}selected{/if}>{$k->id}. {$k->nama}</option>
											{/foreach}
										</select>
										{if form_error('id_kriteria')}
											<small class="text-danger">{form_error('id_kriteria')}</small>
										{/if}	
									{else}
										<div class="text-body">
											{$kriteria_user}
										</div>
									{/if}
								</div>
								<div class="form-group">
									<label for="file">Dokumen Baru</label>
									<div>
										<a href="{$dokumen->path}" class="btn btn-sm btn-dark">Unduh</a>
									</div>
								</div>
								<div class="form-group">
									<label for="file">Dokumen Baru</label>
									<div>
										<input type="file" name="file" id="file" accept="application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing,text/rtf">
										{if form_error('file') || isset($file_error)}
											<small class="text-danger">
												{form_error('file')}
												{$file_error|default:''}
											</small>
										{/if}
									</div>
								</div>
								<div class="form-group">
									<label for="nama">Nama Dokumen</label>
									<input type="text" name="nama" class="form-control {if form_error('nama')}is-invalid{/if}" value="{set_value('nama')|default:xss_clean($dokumen->nama)}">
									{if form_error('nama')}
										<small class="text-danger">{form_error('nama')}</small>
									{/if}
								</div>
								<div class="form-group">
									<label for="deskripsi">Deskripsi</label>
									<textarea name="deskripsi" id="deskripsi" cols="30" rows="4" class="form-control">{set_value('deskripsi')|default:xss_clean($dokumen->deskripsi)}</textarea>
								</div>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					{form_close()}
				</div>
			</div>
		</div>
	</div>
{/block}
