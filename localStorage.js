
function OnClickProcessorType() 
{
    var key = document.getElementById('processors').value;
    LoadResult(key);
}

function OnLoadBody() 
{
    var result = document.getElementById('result');
    if(result == undefined)
        return;

    var resultHTML = result.innerHTML;
    var key = localStorage.getItem("key");
    localStorage.setItem(key, resultHTML);
    console.debug("OnLoad");
}

function OnClickSoftware() 
{
    var key = document.getElementById('software').value;
    LoadResult(key);
}


function OnClickGuarantee() 
{
    var key = document.getElementById('guarantee').value;
    LoadResult(key);
}


function LoadResult(key) 
{
    var table = document.getElementById('result');
    var result = document.getElementById('div_result');
    var item = localStorage.getItem(key);

    if(table != undefined)
        table.remove();

    if(item == undefined) 
    {
        result.innerHTML = "Результата данной операции в хранилище нет!";
    }
    else 
    {
        result.innerHTML = "<table>" + item + "</table>";
    }
}

function OnSubmitProcessorType() 
{
    localStorage.setItem("key", document.getElementById('processors').value);
}

function OnSubmitSoftware() 
{
    localStorage.setItem("key", document.getElementById('software').value);
}

function OnSubmitGuarantee() 
{
    localStorage.setItem("key", document.getElementById('guarantee').value);
}