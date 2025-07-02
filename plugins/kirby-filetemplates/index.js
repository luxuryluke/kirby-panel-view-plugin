panel.plugin('luxuryluke/filetemplates', {
  components: {
		'luxuryluke.filetemplates': {
		props: {
			title: String,
			files: Array
		},
		template: `
			<k-panel-inside>
			<template #header>{{ title }}</template>
			<k-page padding>
					<p>Hello from Filetemplates plugin!</p>
					<k-list>
						<k-list-item
							v-for="file in files"
							:key="file.id"
							>
							{{ file.label }}
						</k-list-item>
					</k-list>
			</k-page>
			</k-panel-inside>
		`
		}
  }
});
