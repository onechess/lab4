$(document).ready(function () {
	const Selector = {
		searchField: '#search-field',
		searchForm: '#search-form',
		searchResult: '#search-result',
		filesSelect: '#files-select'
	};
	
	const Action = {
		searchUrl: 'search.php',
		getFiles: 'get-files.php'
	};
	
	const Template = {
		fileName: '<div class="file-name">Путь к файлу: <b>{{fileName}}}</b>:</div><br>',
		fileContent: '<div class="file-content">{{fileContent}}</div><br>',
		filesSelectOption: '<option value="{{optionValue}}">{{optionName}}</option>',
		nullSearchResult: '<p>Поиск не выдал результатов</p>'
	};
	
	// Формирование списка файлов на основе анализа директории html
	$.post(Action.getFiles, {}, (response) => {
		if (response.hasOwnProperty('error')) {
			alert(response.error);
			
			return false;
		}
		
		let options = '';
		
		for (const [key, value] of Object.entries(response)) {
			options += Template.filesSelectOption.replace('{{optionValue}}', value)
				.replace('{{optionName}}', key);
		}
		
		$(Selector.filesSelect).append(options);
	});
	
	let submitSearchForm = function (event) {
		event.preventDefault();
		
		$(Selector.searchResult).empty();
		let searchMap = $(Selector.searchField).val().split(',');
		searchMap = searchMap.map(str => str.trim());
		
		if (searchMap.length === 0) {
			alert('Введите искомое поиска');
		}
		
		$.post(Action.searchUrl, {searchMap : searchMap, selectedFile: $(Selector.filesSelect).val()}, (response) => {
			if (response.hasOwnProperty('error')) {
				alert(response.error);
				
				return false;
			}
			
			if (Object.keys(response).length > 0) {
				for (const [key, value] of Object.entries(response)) {
					let fileNameSection = Template.fileName.replace('{{fileName}}}', key);
					let fileContentSection = Template.fileContent.replace('{{fileContent}}', value);
					
					$(Selector.searchResult).append(fileNameSection + fileContentSection);
				}
			} else {
				$(Selector.searchResult).html(Template.nullSearchResult);
			}
		});
	};
	
	let resetSearchForm = function (event) {
		event.preventDefault();
		
		$(Selector.searchField).val(null);
		$(Selector.searchResult).empty();
	};
	
	//$(Selector.searchForm).on('submit', submitSearchForm);
	$(Selector.searchForm).on('reset', resetSearchForm);
});