{extends file="layouts/dashboard.tpl"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Formulir
					</h6>
				</div>
				<div class="card-body">
					{form_open(null, 'enctype="multipart/form-data"')}
						<fieldset>
							<legend class="text-primary">
								<strong>Identitas Program Studi</strong>
							</legend>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="program_studi">Program Studi</label>
										<input type="text" class="form-control {if form_error('program_studi')}is-invalid{/if}" value="Pendidikan Luar Sekolah" readonly>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="jenis_program">Jenis Program</label>
										<select name="jenis_program" id="jenis_program" required class="form-control">
											<option selected disabled>Pilih Jenis Program</option>
											<option value="D3" {if set_value('jenis_program') == 'D3'}selected{/if}>D3</option>
											<option value="S1" {if set_value('jenis_program') == 'S1'}selected{/if}>S1</option>
											<option value="S2" {if set_value('jenis_program') == 'S2'}selected{/if}>S2</option>
										</select>
										{if form_error('jenis_program')}
											<small class="text-danger">
												{form_error('jenis_program')}
											</small>
										{/if}
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="peringkat_akreditasi">Peringkat Akreditasi</label>
										<input type="text" name="peringkat_akreditasi" value="{set_value('peringkat_akreditasi')}" class="form-control {if form_error('peringkat_akreditasi')}is-invalid{/if}" placeholder="Contoh: A, B, C">
										{if form_error('peringkat_akreditasi')}
											<small class="text-danger">
												{form_error('peringkat_akreditasi')}
											</small>
										{/if}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="no_sk_ban_pt">No. SK BAN-PT</label>
										<input type="text" name="no_sk_ban_pt" value="{set_value('no_sk_ban_pt')}" class="form-control {if form_error('no_sk_ban_pt')}is-invalid{/if}">
										{if form_error('no_sk_ban_pt')}
											<small class="text-danger">
												{form_error('no_sk_ban_pt')}
											</small>
										{/if}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="tgl_kadaluarsa_sk_ban_pt">Tanggal Kadaluarsa SK BAN-PT</label>
										<input type="date" name="tgl_kadaluarsa_sk_ban_pt" value="{set_value('tgl_kadaluarsa_sk_ban_pt')}" class="form-control {if form_error('tgl_kadaluarsa_sk_ban_pt')}is-invalid{/if}">
										{if form_error('tgl_kadaluarsa_sk_ban_pt')}
											<small class="text-danger">
												{form_error('tgl_kadaluarsa_sk_ban_pt')}
											</small>
										{/if}
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="unit_pengelola">Unit Pengelola</label>
										<input type="text" name="unit_pengelola" value="{set_value('unit_pengelola')}" class="form-control {if form_error('unit_pengelola')}is-invalid{/if}">
										{if form_error('unit_pengelola')}
											<small class="text-danger">
												{form_error('unit_pengelola')}
											</small>
										{/if}
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="perguruan_tinggi">Perguruan Tinggi</label>
										<input type="text" value="Universitas Singaperbangsa Karawang" class="form-control {if form_error('perguruan_tinggi')}is-invalid{/if}" readonly>
										{if form_error('perguruan_tinggi')}
											<small class="text-danger">
												{form_error('perguruan_tinggi')}
											</small>
										{/if}
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat" class="form-control {if form_error('alamat')}is-invalid{/if}">{set_value('alamat')}</textarea>
								{if form_error('alamat')}
									<small class="text-danger">
										{form_error('alamat')}
									</small>
								{/if}
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="telepon">Telepon</label>
										<input type="text" name="telepon" value="{set_value('telepon')}" class="form-control {if form_error('telepon')}is-invalid{/if}">
										{if form_error('telepon')}
											<small class="text-danger">
												{form_error('telepon')}
											</small>
										{/if}
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" name="email" value="{set_value('email')}" class="form-control {if form_error('email')}is-invalid{/if}">
										{if form_error('email')}
											<small class="text-danger">
												{form_error('email')}
											</small>
										{/if}
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="website">Website</label>
										<input type="text" name="website" value="{set_value('website')}" class="form-control {if form_error('website')}is-invalid{/if}">
										{if form_error('website')}
											<small class="text-danger">
												{form_error('website')}
											</small>
										{/if}
									</div>
								</div>
							</div>
							<div class="form-group">
								Tahun Ajaran
								<div class="ts mt-2">
									<input type="text" name="ts_1" value="{set_value('ts_1')}" class="form-control" style="display: inline-block!important; width: 80px!important">
									/
									<input type="text" name="ts_2" value="{set_value('ts_2')}" class="form-control" style="display: inline-block!important; width: 80px!important">
									{if form_error('ts_1') || form_error('ts_2')}
										<small class="text-danger">
											{form_error('ts_1')}
											{form_error('ts_2')}
										</small>
									{/if}
								</div>
							</div>
						</fieldset>
						<hr>
						<fieldset>
							<legend class="text-primary">
								<strong>Dokumen Standar</strong>
							</legend>
							<div class="form-group">
								<label for="id_standar">Standar</label>
								{if $this->ion_auth->in_group('admin')}
									{assign var="standar" value=$this->db->get('standar')->result()}
									<select name="id_standar" id="id_standar" class="form-control">
										{foreach $standar as $s}
											<option
												value="{$s->id}"
												{if set_value('id_standar') == $s->id}selected{/if}
												>
												{$s->nama}
											</option>
										{/foreach}
									</select>
									{if form_error('id_standar')}
										<small class="text-danger">
											{form_error('id_standar')}
										</small>
									{/if}
								{else}
									<div class="text-body">
										{$this->db->where('id', $this->ion_auth->user()->row()->id_standar)->get('standar')->row()->nama}
									</div>
								{/if}
							</div>
							<div class="form-group">
								<label for="file">Unggah dokumen</label>
								<div>
									<input type="file" name="file" id="file" accept="application/pdf,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/msword,application/vnd.openxmlformats-officedocument.wordprocessing" required>
								</div>
								{if form_error('file') || isset($file_error)}
									<small class="text-danger">
										{form_error('file')}
										{$file_error|default:''}
									</small>
								{/if}
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokumen</label>
								<input type="text" name="nama" value="{set_value('nama')}" class="form-control {if form_error('nama')}is-invalid{/if}">
								{if form_error('nama')}
									<small class="text-danger">
										{form_error('nama')}
									</small>
								{/if}
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<textarea name="deskripsi" class="form-control {if form_error('deskripsi')}is-invalid{/if}">{set_value('deskripsi')}</textarea>
								{if form_error('deskripsi')}
									<small class="text-danger">
										{form_error('deskripsi')}
									</small>
								{/if}
							</div>
							<div class="form-group">
								<label for="lokasi">Lokasi</label>
								<input type="text" name="lokasi" value="{set_value('lokasi')}" class="form-control {if form_error('lokasi')}is-invalid{/if}">
								{if form_error('lokasi')}
									<small class="text-danger">
										{form_error('lokasi')}
									</small>
								{/if}
							</div>
							<div class="form-group">
								<label for="rak">Rak</label>
								<input type="text" name="rak" value="{set_value('rak')}" class="form-control {if form_error('rak')}is-invalid{/if}">
								{if form_error('rak')}
									<small class="text-danger">
										{form_error('rak')}
									</small>
								{/if}
							</div>
							<div class="form-group">
								<label for="koordinator">Koordinator</label>
								<input type="text" name="koordinator" value="{set_value('koordinator')}" class="form-control {if form_error('koordinator')}is-invalid{/if}">
								{if form_error('koordinator')}
									<small class="text-danger">
										{form_error('koordinator')}
									</small>
								{/if}
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary">Kirim</button>
					{form_close()}
				</div>
			</div>
		</div>
	</div>
{/block}
