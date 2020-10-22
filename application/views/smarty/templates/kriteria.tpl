{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Manajemen Kriteria"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Semua Kriteria
					</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">	
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th class="text-center">Aksi</th>
								</tr>
							</thead>
							<tbody>
								{foreach $kriteria as $s}									
									<tr>
										<td>{$s->id}</td>
										<td>{$s->nama}</td>
										<td class="text-center">
											{form_open('/kriteria/edit/'|cat:$s->id, 'onsubmit="onEdit(event)"')}
												<input type="hidden" name="nama">
												<button data-nama="{$s->nama}" type="submit" class="btn btn-sm btn-primary">
													<i class="fas fa-pencil-alt"></i>
												</button>
											{form_close()}
										</td>
									</tr>
								{/foreach}
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		function onEdit(e)
		{
			const $form = e.target
			const $button = $form.querySelector('button')
			const $input = $form.querySelector('input')

			$input.value = $button.dataset.nama

			if ($input.value = prompt("Ubah nama kriteria", $input.value))
			{
				$form.submit()
			}
			else
			{
				e.preventDefault()
			}
		}
	</script>
{/block}
