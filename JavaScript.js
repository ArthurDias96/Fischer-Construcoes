

function Enviar() {

    var nome = document.getElementById("nomeid");

    if (nome.value != "") {
        alert('Obrigado sr(a) ' + nome.value + ' os seus dados foram encaminhados com sucesso');
    }

}

  function getNthIndex(cur, dir) {
    var t = cur, idx = 0;
    while (cur = cur[dir] ) {
      if (t.tagName == cur.tagName) {
        idx++;
      }
    }
    return idx;
  }

  function isNthOf(elm, pattern, dir) {
    var position = getNthIndex(elm, dir), loop;
    if (pattern == "odd" || pattern == "even") {
      loop = 2;
      position -= !(pattern == "odd");
    } else {
      var nth = pattern.indexOf("n");
      if (nth > -1) {
        loop = parseInt(pattern, 10) || parseInt(pattern.substring(0, nth) + "1", 10);
        position -= (parseInt(pattern.substring(nth + 1), 10) || 0) - 1;
      } else {
        loop = position + 1;
        position -= parseInt(pattern, 10) - 1;
      }
    }
    return (loop<0 ? position<=0 : position >= 0) && position % loop == 0
  }

  var pseudos = {
    "first-of-type": function(elm) {
      return getNthIndex(elm, "previousSibling") == 0;
    },
    "last-of-type": function(elm) { 
      return getNthIndex(elm, "nextSibling") == 0;
    },
    "only-of-type": function(elm) { 
      return pseudos["first-of-type"](elm) && pseudos["last-of-type"](elm);
    },
    "nth-of-type": function(elm, i, match) {
      return isNthOf(elm, match[3], "previousSibling");
    },
    "nth-last-of-type": function(elm, i, match) {
      return isNthOf(elm, match[3], "nextSibling");
    }   
  }
  $.extend($.expr[':'], pseudos);
}(jQuery));

document.querySelector('button').addEventListener('click', function (event) {
  document.querySelectorAll('p').forEach(function (paragraph) {
    paragraph.classList.toggle('caldeirao');
  });
  var newButtonText = event.target.dataset.toggleText;
  var oldText = event.target.innerText;
  event.target.innerText = newButtonText;
  event.target.dataset.toggleText = oldText;
});

