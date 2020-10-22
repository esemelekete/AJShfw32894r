{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Manajemen TS"}

{block name=script}
	<script>
		function onDelete(e)
		{
			if (confirm("Identitas Program Studi dan Semua Dokumen pada Tahun Akademik yang Anda pilih akan dihapus. Apakah Anda yakin?"))
			{
				return true
			}

			return false
		}
	</script>
{/block}

{block name=admin_content}
	<div class="row">	
		<div class="col-12">
			<a href="/ts/create" class="btn btn-primary btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah Baru</span>
			</a>
		</div>
	</div>
	<div class="row mt-3">
		{foreach $ts as $item}			
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
									{$item->ta_1}/{$item->ta_2}
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">
									<a href="/identitas/{$item->id}" class="btn btn-sm btn-info btn-icon-split mr-1">
										<span class="icon text-white">
											<i class="fas fa-file-alt"></i>
										</span>
										<span class="text">Identitas</span>
									</a>							
									{form_open('/ts/delete', 'onsubmit="return onDelete(event)" class="d-inline"')}
										<input type="hidden" name="id" value="{$item->id}">
										<button type="submit" class="btn btn-sm btn-danger">
											<i class="fas fa-trash"></i>
										</button>
									{form_close()}
								</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-calendar fa-2x text-gray-300"></i>
							</div>
						</div>
					</div>
				</div>
			</div>		
		{/foreach}
	</div>
{/block}
