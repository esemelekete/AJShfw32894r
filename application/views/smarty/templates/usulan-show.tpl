{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Usulan {$usulan->id}"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/usulan"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Pengusul: {$usulan->pengusul->first_name} {$usulan->pengusul->last_name}
					</h6>
				</div>
				<div class="card-body">
					<fieldset>
						<legend class="text-primary">
							<strong>Identitas Program Studi</strong>
						</legend>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="program_studi">Program Studi</label>
									<div class="text-body">
										<strong>Pendidikan Luar Sekolah</strong>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="jenis_program">Jenis Program</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->jenis_program)}</strong>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="peringkat_akreditasi">Peringkat Akreditasi</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->peringkat_akreditasi)}</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="no_sk_ban_pt">No. SK BAN-PT</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->no_sk_ban_pt)}</strong>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tgl_kadaluarsa_sk_ban_pt">Tanggal Kadaluarsa SK BAN-PT</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->tgl_kadaluarsa_sk_ban_pt)}</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="unit_pengelola">Unit Pengelola</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->unit_pengelola)}</strong>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="perguruan_tinggi">Perguruan Tinggi</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->perguruan_tinggi)}</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->alamat)}</strong>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="telepon">Telepon</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->alamat)}</strong>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->email)}</strong>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="website">Website</label>
									<div class="text-body">
										<strong>{xss_clean($usulan->website)}</strong>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							Tahun Ajaran
							<div class="ts mt-2">
								<div class="text-body">
									<strong>{xss_clean($usulan->ts_1)}/{xss_clean($usulan->ts_2)}</strong>
								</div>
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
							<div class="text-body">
								<strong>{xss_clean($usulan->standar->nama)}</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="file">dokumen</label>
							<div>
								<a href="{$usulan->dokumen->path}" class="btn btn-primary">
									Unduh
								</a>
							</div>
						</div>
						<div class="form-group">
							<label for="nama">Nama Dokumen</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->dokumen->nama)}</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="deskripsi">Deskripsi</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->dokumen->deskripsi)}</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="lokasi">Lokasi</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->dokumen->lokasi)}</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="rak">Rak</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->dokumen->rak)}</strong>
							</div>
						</div>
						<div class="form-group">
							<label for="koordinator">Koordinator</label>
							<div class="text-body">
								<strong>{xss_clean($usulan->dokumen->koordinator)}</strong>
							</div>
						</div>
					</fieldset>
					<a href="/usulan" class="btn btn-sm btn-dark"><i class="fas fa-arrow-left mr-2 text-white"></i> Kembali</a>
				</div>
			</div>
		</div>
	</div>
{/block}
