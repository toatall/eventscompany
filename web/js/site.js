const LOAD_IMAGE = '<img src="/images/loader_fb.gif" style="width:50px;" />';

function ajaxJson(url, container_title, container_body, image_loader)
{
    var img = image_loader || LOAD_IMAGE;

    $(container_title).html(img);
    $(container_body).html(img);
    
    $.ajax({
        url: url,
        dataType: "json"
    })
    .done(function (data) {

        // заголовок
        if (data.hasOwnProperty('title')) {
            $(container_title).html(data.title);
        }
        else
        {
            $(container_title).html('<div class="alert alert-danger">Отстуствует аттрибут title</div>');
        }

        // контент
        if (data.hasOwnProperty('content')) {
            $(container_body).html(data.content);
        }
        else
        {
            $(container_body).html('<div class="alert alert-danger">Отсутствует аттрибут content</div>');
        }        
    })
    .fail(function (jqXHR) {
        var error_text = '<div class="alert alert-danger">' + jqXHR.status + ' ' + jqXHR.statusText + '</div>';
        $(container_title).html('Ошибка');
        $(container_body).html(error_text);        
    });
    
}