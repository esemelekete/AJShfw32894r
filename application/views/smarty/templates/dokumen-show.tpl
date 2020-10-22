{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Detail Dokumen"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						<a href="/dokumen"><i class="fas fa-arrow-left mr-2 text-muted"></i></a>
						Detail Dokumen
					</h6>
				</div>
				<div class="card-body">
					<div class="row justify-content-center">
						<div class="col-md-8 col-lg-5">
							<div class="form-group">
								<label for="ts">TS</label>
								<div class="text-body">
									<strong>{$dokumen->ta_1}/{$dokumen->ta_2}</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="id_standar">Kriteria</label>
								<div class="text-body">
									<strong>{$kriteria->id}. {xss_clean($kriteria->nama)}</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="file">Dokumen</label>
								<div>
									<a href="{$dokumen->path}" class="btn btn-sm btn-dark">
										Unduh
									</a>
								</div>
							</div>
							<div class="form-group">
								<label for="nama">Nama Dokumen</label>
								<div class="text-body">
									<strong>{xss_clean($dokumen->nama)}</strong>
								</div>
							</div>
							<div class="form-group">
								<label for="deskripsi">Deskripsi</label>
								<div class="text-body">
									<strong>{xss_clean(nl2br($dokumen->deskripsi))}</strong>
								</div>
							</div>
							<hr>
							<a href="/dokumen/edit/{$dokumen->id}" class="btn btn-primary btn-icon-split">
								<div class="icon text-white-50">
									<i class="fas fa-pencil-alt"></i>
								</div>
								<div class="text">
									Edit
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
