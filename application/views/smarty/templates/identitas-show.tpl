{extends file="layouts/dashboard.tpl"}

{assign var="title" value="TS {$identitas->ta_1}/{$identitas->ta_2}"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/ts"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Identitas Program Studi
					</h6>
				</div>
				<div class="card-body text-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="program_studi">Program Studi</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->program_studi)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="jenis_program">Jenis Program</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->jenis_program)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="peringkat_akreditasi">Peringkat Akreditasi</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->peringkat_akreditasi)}</strong>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="no_sk_ban_pt">No. SK BAN-PT</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->no_sk_ban_pt)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="tgl_kadaluarsa_sk_ban_pt">Tanggal Kadaluarsa SK BAN-PT</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->tgl_kadaluarsa_sk_ban_pt)}</strong>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="unit_pengelola">Unit Pengelola</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->unit_pengelola)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="perguruan_tinggi">Perguruan Tinggi</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->perguruan_tinggi)}</strong>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<div class="text-body">
							<strong>{xss_clean($identitas->alamat)}</strong>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="telepon">Telepon</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->telepon)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="email">Email</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->email)}</strong>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="website">Website</label>
								<div class="text-body">
									<strong>{xss_clean($identitas->website)}</strong>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
