{extends file="layouts/dashboard.tpl"}

{block admin_content}
	<div class="row">
		{for $i=0 to 8}
			<div class="col-xl-3 col-md-3 mb-4 relative">
				<a href="/dokumen?id_kriteria={$i+1}" style="left:0;top:0;right:0;bottom:0;position:absolute;z-index:20"></a>
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Kriteria {$i+1}
								</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">{$kriteria_count[$i+1]|default:0}</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		{/for}
		<div class="col-xl-3 col-md-3 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Dokumen</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">{$count_all}</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-file fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{/block}
