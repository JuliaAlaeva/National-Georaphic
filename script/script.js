// cash
var doc = document;
doc.addEventListener("DOMContentLoaded", show_choosed);

// elements menu
var all_check = dropdown_categories.getElementsByTagName("input");
for(var i = 0, k = all_check.length; i < k; i++)
{
    all_check[i].addEventListener("click", show_choosed);
}

// all select 
var all_select = doc.getElementById("all_select");
all_select.addEventListener("click", select_all);

function select_all()
{
    if(all_select.checked)
    {
        for(var i = 1, k = all_check.length; i < k; i++)
        {
            all_check[i].checked = "true";
        }
    }
}

// show recent news
var most_recent_click = doc.getElementById("most_recent_icon");
var search_arrow_click = doc.getElementById("search_arrow");
most_recent_click.addEventListener("click", show_block);
search_arrow_click.addEventListener("click", show_block);

function show_block(event)
{
    
    // choose block
    if(event.currentTarget.id == "most_recent_icon")
    {
        var show_block = doc.getElementById("dropdown_news");
    }
    else if(event.currentTarget.id == "search_arrow")
    {
        var show_block = doc.getElementById("dropdown_categories");
    }
    
    // get value "display"
    var block_display = getComputedStyle(show_block).display;

    if(block_display == "none")
    {
        show_block.style.display = "block";
    }
    else
    {
        show_block.style.display = "none";
    }
}

// fill choosed
function show_choosed()
{
    // get container
    var all_categories = doc.getElementById("all_categories");
    // seach choosed elements
    var dropdown_categories = doc.getElementById("dropdown_categories");
    var inf = "";
    
    for(var i = 1, k = all_check.length; i < k; i++)
    {
        
        if(all_check[i].checked)
        {
            inf += all_check[i].parentNode.getElementsByTagName("label")[0].innerHTML;
            
        }
        if(i != k-1 && all_check[i].checked)
        {
            inf += ", ";
        }
    }
    
    if(inf == "")
    {
        inf = "All Categories";
    }
    
    all_categories.innerHTML = inf;
    
}