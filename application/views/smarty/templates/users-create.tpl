{extends file="layouts/dashboard.tpl"}

{assign var="title" value="Tambahkan Pengguna"}

{block name=admin_content}
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold">
						Pengguna Baru
					</h6>
				</div>
				<div class="card-body">
					{form_open()}
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="first_name">Nama Depan</label>
									<input type="text" name="first_name" value="{set_value('first_name')}" class="form-control {if form_error('first_name')}is-invalid{/if}" autocomplete="off">
									{if form_error('first_name')}
										<small class="text-danger">{form_error('first_name')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="last_name">Nama Belakang</label>
									<input type="text" name="last_name" value="{set_value('last_name')}" class="form-control {if form_error('last_name')}is-invalid{/if}" autocomplete="off">
									{if form_error('last_name')}
										<small class="text-danger">{form_error('last_name')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="phone">No. Telepon</label>
									<input type="text" name="phone" value="{set_value('phone')}" class="form-control {if form_error('phone')}is-invalid{/if}" autocomplete="off">
									{if form_error('phone')}
										<small class="text-danger">{form_error('phone')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="group">Hak Akses</label>
									<select name="group" id="group" class="form-control">
										<option value="" {if empty(set_value('group'))}selected{/if} disabled>Pilih hak akses</option>
										{foreach from=$this->db->get('groups')->result() item=$group}
											<option value="{$group->id}" {if set_value('group') === $group->id}selected{/if}>
												{if $group->name === 'admin'}
													Admin
												{else}
													Umum
												{/if}
											</option>
										{/foreach}
									</select>
									{if form_error('group')}
										<small class="text-danger">{form_error('group')}</small>
									{/if}
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" value="{set_value('email')}" class="form-control {if form_error('email')}is-invalid{/if}" autocomplete="off">
									{if form_error('email')}
										<small class="text-danger">{form_error('email')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="password">Password</label>
									<input type="password" name="password" value="" class="form-control {if form_error('password')}is-invalid{/if}">
									{if form_error('password')}
										<small class="text-danger">{form_error('password')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="password_confirm">Konfirmasi Password</label>
									<input type="password" name="password_confirm" value="" class="form-control {if form_error('password_confirm')}is-invalid{/if}" placeholder="Ulangi password">
									{if form_error('password_confirm')}
										<small class="text-danger">{form_error('password_confirm')}</small>
									{/if}
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="id_kriteria">Kriteria</label>
									<select name="id_kriteria" id="id_kriteria" class="form-control {if form_error('password_confirm')}is-invalid{/if}">
										<option value="" {if empty(set_value('group'))}selected{/if} disabled>Pilih kriteria</option>
										{foreach from=$this->db->get('kriteria')->result() item=$kriteria}
											<option value="{$kriteria->id}" {if set_value('id_kriteria') === $kriteria->id}selected{/if}>
												{$kriteria->nama}
											</option>
										{/foreach}
									</select>
									{if form_error('id_kriteria')}
										<small class="text-danger">{form_error('id_kriteria')}</small>
									{/if}
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-end">	
							<button type="submit" class="btn btn-primary">
								Simpan
							</button>
						</div>
					{form_close()}
				</div>
			</div>
		</div>
	</div>
{/block}
