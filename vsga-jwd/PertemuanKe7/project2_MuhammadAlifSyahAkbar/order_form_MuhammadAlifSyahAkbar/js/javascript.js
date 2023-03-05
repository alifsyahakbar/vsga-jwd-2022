
        var product = [
            {
                id: 1,
                nama: 'Capucino',
                harga: 35000,
                active: true
            },
            {
                id: 2,
                nama: 'Green Tea Latte',
                harga: 40000,
                active: true
            },
            {
                id: 3,
                nama: 'Fish and Chips',
                harga: 50000,
                active: true
            },
            {
                id: 4,
                nama: 'Tuna Sandwich',
                harga: 45000,
                active: true
            },
            {
                id: 5,
                nama: 'Mineral Water',
                harga: 8000,
                active: true
            },
            {
                id: 6,
                nama: 'French Fries',
                harga: 18000,
                active: true
            }
        ]
         
        var total = 0;
        var $app = document.querySelector('.app');
         
        function hasClass(el, className)
        {
            if (el.classList)
                return el.classList.contains(className);
            return !!el.className.match(new RegExp('(\\\\s|^)' + className + '(\\\\s|$)'));
        }
         
        function addClass(el, className)
        {
            if (el.classList)
                el.classList.add(className)
            else if (!hasClass(el, className))
                el.className += " " + className;
        }
         
        function removeClass(el, className)
        {
            if (el.classList)
                el.classList.remove(className)
            else if (hasClass(el, className))
            {
                var reg = new RegExp('(\\\\s|^)' + className + '(\\\\s|$)');
                el.className = el.className.replace(reg, ' ');
            }
        }
         
        function currency(amount){
            return 'Rp '+ amount;
        }
         
        function renderTitle(container) {
            var $title = document.createElement('h1');
            $title.innerHTML = 'Pesanan';
            container.appendChild($title);
        }
         
        function addTotal(product, total, isAdd) {
            if(isAdd){
                total += product.harga;
            } else {
                total -= product.harga;
            }
            return total;
        }
         
        function renderList(container, product) {
            var $orderList = document.createElement('ul');
         
            product.forEach(function (product){
                var $product = document.createElement('li');
                var $productPrice = document.createElement('span');
         
                $productPrice.innerHTML = currency(product.harga);
                $product.innerHTML = product.nama;
         
                $product.appendChild($productPrice);
                $orderList.appendChild($product);
         
                $product.addEventListener('click', function (event){
                    var isAdd = !hasClass($product, 'is-active');
         
                    if (isAdd) {
                        addClass($product, 'is-active');
                    } else {
                        removeClass($product, 'is-active');
                    }
         
                    total = addTotal(product, total, isAdd);
                    var $total = document.querySelector('.total span');
                    $total.innerHTML = total;
                })
            })
            container.appendChild($orderList);
        }
         
        function renderTotalContainer(container, total) {
            var $totalContainer = document.createElement('div');
            addClass($totalContainer, 'total');
            $totalContainer.innerHTML = 'Total : ';
         
            var $total = document.createElement('span');
            $total.innerHTML = currency(total);
            $totalContainer.appendChild($total);
         
            container.appendChild($totalContainer);
        }
         
        renderTitle($app);
        renderList($app, product);
        renderTotalContainer($app, total);