<template>
    <div class="data-table">
        <div class="main-table">
            <input 
              type="text"
              placeholder="Filter by Name or Categories"
              v-model="filter" 
            />
            <table class="table">
                <thead>
                    <tr>
                        <th class="table-head">#</th>
                        <th
                            v-for="column in columns"
                            :key="column"
                            @click="sortByColumn(column)"
                            class="table-head"
                        >
                            {{ column | columnHead }}
                            <span v-if="column === sortedColumn">
                                <i
                                    v-if="order === 'asc'"
                                    class="fas fa-arrow-up"
                                ></i>
                                <i v-else class="fas fa-arrow-down"></i>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="" v-if="tableData.length <= 0">
                        <td
                            class="lead text-center"
                            :colspan="columns.length + 1"
                        >
                            No data found.
                        </td>
                    </tr>
                    <tr
                        v-for="(data, key1) in filteredRows"
                        :key="key1"
                        class="m-datatable__row"
                        v-else
                    >
                        <td>{{ serialNumber(key1) }}</td>
                        <template v-for="(value, key,index) in data" >
                          <td :key="`${key1}-${index}`">
                            {{(key == 'percentage_of_total')? decimalNo(value) : value}}
                          </td>
                        </template>

                    </tr>

                </tbody>
            </table>
        </div>
       
    </div>
</template>

<script type="text/ecmascript-6">
export default {
  props: {
    columns: {
      type: Array,
      required: true
    },
  },
  data() {
    return {
      fetchUrl: 'http://localhost:8000/api/transactions-data',
      tableData: [],
      url: '',
      pagination: {
        meta: { to: 1, from: 1 }
      },
      filter:'',
      offset: 4,
      currentPage: 1,
      perPage: 50,
      sortedColumn: this.columns[2],
      order: 'desc'
    }
  },
   watch: {
    fetchUrl: {
      handler: function(fetchUrl) {
        this.url = fetchUrl
      },
      immediate: true
    }
  },
  created() {
    return this.fetchData(this.fetchUrl);
  },
  computed: {
    filteredRows() {
      return this.tableData.filter(row => {
        const name = row.name.toLowerCase();
        const category = row.categoryName.toLowerCase();
        const searchTerm = this.filter.toLowerCase();

        return category.includes(searchTerm) || name.includes(searchTerm);
      });
    },
  },
  methods: {
   
    async fetchData() {
      let dataFetchUrl = `${this.url}?page=${this.currentPage}&column=${this.sortedColumn}&order=${this.order}&per_page=${this.perPage}`
      let $this = this;
      await axios.get(dataFetchUrl)
        .then(({ data }) => {
          $this.pagination = data
          $this.tableData = data.data
          
        }).catch(error => $this.tableData = [])
    },
    decimalNo(no) {
      return parseFloat(no).toFixed(2)+' %'; 
    },
    /**
     * Get the serial number.
     * @param key
     * */
    serialNumber(key) {
      return (this.currentPage - 1) * this.perPage + 1 + key
    },
    /**
     * Sort the data by column.
     * */
    sortByColumn(column) {
      if(column == 'categories'){
        return;
      }
      if (column === this.sortedColumn) {
        this.order = (this.order === 'asc') ? 'desc' : 'asc'
      } else {
        this.sortedColumn = column
        this.order = 'asc'
      }
      this.fetchData()
    }
  },
  filters: {
    columnHead(value) {
      return value.split('_').join(' ').toUpperCase()
    }
  },
  name: 'TransactionCategories'
}
</script>

<style scoped>
* {
    box-sizing: border-box;
  }
  
  body {
    font-family: "Lato", sans-serif;
    color: #202020;
  }
  
  p {
    display: none;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
    overflow: hidden;
  }
  table td, table th {
    border-top: 1px solid #ECF0F1;
    padding: 10px;
  }
  table td {
    border-left: 1px solid #ECF0F1;
    border-right: 1px solid #ECF0F1;
  }
  table th {
    background-color: #4ECDC4;
  }
  table tr:nth-of-type(even) td {
    background-color: #d9f4f2;
  }
  table .total th {
    background-color: white;
  }
  table .total td {
    text-align: right;
    font-weight: 700;
  }
  
  .mobile-header {
    display: none;
  }
  
  @media only screen and (max-width: 760px) {
    p {
      display: block;
      font-weight: bold;
    }
  
    table tr td:not(:first-child), table tr th:not(:first-child), table tr td:not(.total-val) {
      display: none;
    }
    table tr:nth-of-type(even) td:first-child {
      background-color: #d9f4f2;
    }
    table tr:nth-of-type(odd) td:first-child {
      background-color: white;
    }
    table tr:nth-of-type(even) td:not(:first-child) {
      background-color: white;
    }
    table tr th:first-child {
      width: 100%;
      display: block;
    }
    table tr th:not(:first-child) {
      width: 40%;
      transition: transform 0.4s ease-out;
      transform: translateY(-9999px);
      position: relative;
      z-index: -1;
    }
    table tr td:not(:first-child) {
      transition: transform 0.4s ease-out;
      transform: translateY(-9999px);
      width: 60%;
      position: relative;
      z-index: -1;
    }
    table tr td:first-child {
      display: block;
      cursor: pointer;
    }
    table tr.total th {
      width: 25%;
      display: inline-block;
    }
    table tr td.total-val {
      display: inline-block;
      transform: translateY(0);
      width: 75%;
    }
  }
  @media only screen and (max-width: 300px) {
    table tr th:not(:first-child) {
      width: 50%;
      font-size: 14px;
    }
    table tr td:not(:first-child) {
      width: 50%;
      font-size: 14px;
    }
  }
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 25px;
}
</style>
