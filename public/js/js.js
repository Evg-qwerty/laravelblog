/*
Auto change title->url(seo).
*/
$(document).ready(function () {
    // source
    $('#url').after("<span class='trans btn btn-primary btn-xs'>Транслитерация</span>");
    $('.trans').click(function(){
        translit();
        return false;
    });
});
function translit(){
    var space = '-';
    var text = $('#title').val().toLowerCase();
    var transl = {
        'а': 'a', 'б': 'b', 'в': 'v', 'г': 'g', 'д': 'd', 'е': 'e', 'ё': 'e', 'ж': 'zh',
        'з': 'z', 'и': 'i', 'й': 'j', 'к': 'k', 'л': 'l', 'м': 'm', 'н': 'n',
        'о': 'o', 'п': 'p', 'р': 'r','с': 's', 'т': 't', 'у': 'u', 'ф': 'f', 'х': 'h',
        'ц': 'c', 'ч': 'ch', 'ш': 'sh', 'щ': 'sh','ъ': space, 'ы': 'y', 'ь': '', 'э': 'e', 'ю': 'u', 'я': 'ya',
        ' ': space, '_': space, '`': space, '~': space, '!': space, '@': space,
        '#': space, '$': space, '%': space, '^': space, '&': space, '*': space,
        '(': space, ')': space,'-': space, '\=': space, '+': space, '[': space,
        ']': space, '\\': space, '|': space, '/': space,'.': space, ',': space,
        '{': space, '}': space, '\'': space, '"': space, ';': space, ':': space,
        '?': space, '<': space, '>': space, '№':space
    }

    var result = '';
    var curent_sim = '';

    for(i=0; i < text.length; i++) {
        if(transl[text[i]] != undefined) {
            if(curent_sim != transl[text[i]] || curent_sim != space){
                result += transl[text[i]];
                curent_sim = transl[text[i]];
            }
        }
        else {
            result += text[i];
            curent_sim = text[i];
        }
    }

    result = TrimStr(result);
    //target
    $('#url').val(result);

}
function TrimStr(s) {
    s = s.replace(/^-/, '');
    return s.replace(/-$/, '');
}
