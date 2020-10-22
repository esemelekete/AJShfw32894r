{extends 'layouts/blank.tpl'}

{block name=content}
	Current: {sprintf("%03d", $current_version)|default:'000'}
	{form_open(NULL, 'onsubmit="return onSubmit(this)"')}
		<label for="version">To version: </label>
		<select name="version" id="version">
			<option value="0">000_clear_all_data</option>
			{foreach $versions as $version}
				<option value="{$version['number']}">{$version['name']}</option>
			{/foreach}
		</select>
		<button type="submit">Migrate</button>
	{form_close()}

	<br>

	{form_open(NULL, 'onsubmit="return onSubmit(this)" style="display:inline"')}
		<input type="hidden" name="version" value="0">
		<button type="submit">Clear data</button>
	{form_close()}

	{form_open(NULL, 'onsubmit="return onSubmit(this)" style="display:inline"')}
		<input type="hidden" name="version" value="{$version['number']}">
		<button type="submit">Migrate to latest</button>
	{form_close()}

	<script>
		function onSubmit(e) {
			if ( ! confirm('Are you sure to migrate?')) {
				return false;
			}
		}
	</script>
{/block}
