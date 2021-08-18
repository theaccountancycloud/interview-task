const transactions = [
    { name: 'Camden Bike Shop', amount: -25, date: '2021-08-18', categories: [ 'Shops', 'Recreation' ] },
    { name: 'INTEREST PAYMENT', amount: 50, date: '2020-09-12', categories: [ 'Bank', 'Transfer' ] },
    { name: 'Credit Card 2222', amount: -21, date: '2021-02-01', categories: [ 'Bank', 'Fees' ] },
    { name: 'Burger Shop Ltd', amount: -18.2, date: '2021-04-15', categories: [ 'Restaurants' ] },
    { name: 'Outdoor Leisure Ltd', amount: -56, date: '2020-06-11', categories: [ 'Recreation' ] },
    { name: 'Airlines Worldwide Booking', amount: -225, date: '2021-07-18', categories: [ 'Flights', 'Booking' ] },
    { name: 'TV LICENSE MAY', amount: -25, date: '2021-05-01', categories: [ 'Subscription', 'Furniture' ] },
    { name: 'From AC/55244727VIA MOBILE', amount: 37.65, date: '2021-02-24', categories: [ 'Bank', 'Transfer' ] },
    { name: 'Audible', amount: -7.99, date: '2021-08-01', categories: [ 'Shops', 'Digital Purchase' ] },
    { name: 'Cafe Riva', amount: -2.95, date: '2021-08-06', categories: [ 'Shops', 'Restaurants' ] },
]

const tableContainer = document.getElementById('table')

function searchTransactions (e) {
    console.log(e)
}

function renderTable () {
    for (let i = 0; i < transactions.length; i++) {
        let tableRow = document.createElement('tr')

        let tableColumn = document.createElement('td')
        tableColumn.innerText = transactions[i].name

        tableRow.appendChild(tableColumn)

        tableContainer.appendChild(tableRow)
    }
}

renderTable()

document.getElementById('searchinput').addEventListener('keyup', searchTransactions)
