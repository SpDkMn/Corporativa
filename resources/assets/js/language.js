let lang = window.navigator.language
if (lang.indexOf('-') !== -1) lang = lang.split('-')[0]
if (lang.indexOf('_') !== -1) lang = lang.split('_')[0]
export default lang
