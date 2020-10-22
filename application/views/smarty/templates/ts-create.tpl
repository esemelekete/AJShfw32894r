{extends file="layouts/dashboard.tpl"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Tambahkan TS
					</h6>
				</div>
				<div class="card-body text-body">
					{form_open(null, 'enctype="multipart/form-data"')}
						<input type="hidden" name="ts_unik" value="1">
						<input type="hidden" name="ts_ngaco" value="1">
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
									<input type="text" name="peringkat_akreditasi" value="{set_value('peringkat_akreditasi')}" class="form-control {if form_error('peringkat_akreditasi')}is-invalid{/if}" placeholder="Contoh: A, B, C" autocomplete="off">
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
									<input type="text" name="website" value="{set_value('website')}" class="form-control {if form_error('website')} is-invalid {/if}">
									{if form_error('website')}
										<small class="text-danger">
											{form_error('website')}
										</small>
									{/if}
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="ts">Tahun Akademik</label>
							<div class="clearfix"></div>
								<input type="text" name="ts" id="ts" value="{set_value('ts')}" class="form-control d-inline-block {if form_error('ts') || form_error('ts_ngaco') || form_error('ts_unik')}is-invalid{/if}" style="width: unset" autocomplete="off">
							<div class="clearfix"></div>
							<small class="text-muted">Contoh: 2020/2021</small>
							{if form_error('ts') || form_error('ts_unik') || form_error('ts_ngaco')}
								<div>
									<small class="text-danger">
										{form_error('ts')|default:form_error('ts_ngaco')}
										{form_error('ts_unik')}
									</small>
								</div>
							{/if}
						</div>
						<button type="submit" class="btn btn-primary">Kirim</button>
					{form_close()}
				</div>
			</div>
		</div>
	</div>
{/block}
