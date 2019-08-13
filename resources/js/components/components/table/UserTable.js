import React from 'react'
import { Link } from 'react-router-dom';
import { Table, Button, Icon, Input, DatePicker, Cascader } from 'antd'
import Highlighter from 'react-highlight-words';
// import classnames from 'classnames';
import hanhchinhvn from '../../hanhchinhvn.json'
import axios from 'axios'
import moment from 'moment';

const { RangePicker } = DatePicker;
const { Search } = Input;

class UserTable extends React.Component {
  state = {
    searchText: '',
    data: [],
    pagination: {},
    loading: false,
    filterDate: {},
    filters: {},
    sorter: {}
  };

  componentDidMount() {
    this.fetch();
  }

  getColumnSearchProps = dataIndex => ({
    filterDropdown: ({ setSelectedKeys, selectedKeys, confirm, clearFilters }) => (
      <div style={{ padding: 8 }}>
        <Input
          ref={node => {
            this.searchInput = node;
          }}
          placeholder={`Search ${dataIndex}`}
          value={selectedKeys[0]}
          onChange={e => setSelectedKeys(e.target.value ? [e.target.value] : [])}
          onPressEnter={() => this.handleSearch(selectedKeys, confirm, dataIndex)}
          style={{ width: 188, marginBottom: 8, display: 'block' }}
        />
        <Button
          type="primary"
          onClick={() => this.handleSearch(selectedKeys, confirm, dataIndex)}
          icon="search"
          size="small"
          style={{ width: 90, marginRight: 8 }}
        >
          Search
      </Button>
        <Button onClick={() => this.handleReset(clearFilters, dataIndex)} size="small" style={{ width: 90 }}>
          Reset
      </Button>
      </div>
    ),
    filterIcon: filtered => (
      <Icon type="search" style={{ color: filtered ? '#1890ff' : undefined }} />
    ),
    onFilterDropdownVisibleChange: visible => {
      if (visible) {
        setTimeout(() => this.searchInput.select());
      }
    },
    render: text => {
      return !this.myfun(dataIndex) ? (<span>{text}</span>) : (<Highlighter
        highlightStyle={{ backgroundColor: '#ffc069', padding: 0 }}
        searchWords={[this.state.searchText[dataIndex]]}
        autoEscape
        textToHighlight={text.toString()}
      />)
    },
  });

  myfun = (dataIndex) => {
    var isSearch = Object.keys(this.state.searchText).indexOf(dataIndex) !== -1;
    return isSearch;
  }

  handleSearch = (selectedKeys, confirm, dataIndex) => {
    confirm();
    this.setState({
      searchText:
        { ...this.state.searchText, [dataIndex]: selectedKeys[0] }
    });
    console.log(this.state.searchText)
  };

  handleReset = (clearFilters, dataIndex) => {
    clearFilters();
    this.setState({ searchText: { ...this.state.searchText, [dataIndex]: '' } });
    console.log('dataindex :', dataIndex)
  };

  handleTableChange = (pagination, filters, sorter) => {
    // console.log(JSON.stringify(sorter) )
    const pager = { ...this.state.pagination };
    const filterDate = this.state.filterDate;
    pager.current = pagination.current;
    this.setState({
      pagination: pager,
      filters,
      sorter,

    });

    // console.log(this.state.filters)
    this.fetch({
      // results: pagination.pageSize,
      page: pagination.current,
      sortField: sorter.field,
      sortOrder: sorter.order && sorter.order.substr(0, sorter.order.length - 3),
      filters,
      filterDate
    });
  };

  fetch = (param = {}) => {
    // console.log('params:', param);
    this.setState({ loading: true });
    axios.get('/api/user', {
      params: {
        results: 10,
        ...param,
      }
    }).then(res => {
      const pagination = { ...this.state.pagination };
      console.log(res.data);
      console.log(this.state);
      // Read total count from server
      pagination.total = res.data.totalCount;
      // pagination.total = 20;
      this.setState({
        loading: false,
        data: res.data.users,
        pagination,
      });
    });
  };

  handleData = (date, dateString) => {


    var { pagination, filters, sorter } = this.state;

    var filterDate = [];

    if(date.length > 0){
      filterDate = {
        start: date[0].valueOf(),
        end: date[1].valueOf()
      }
    }

    this.setState({ filterDate });

    this.fetch({
      // results: pagination.pageSize,
      page: pagination.current,
      sortField: sorter.field,
      sortOrder: sorter.order && sorter.order.substr(0, sorter.order.length - 3),
      filters,
      filterDate
    });
  }

  render() {

    const columns = [
      {
        title: 'Avatar',
        dataIndex: 'avatar',
        render: (avatar, record) => (<img className="avatar_in_list" src={avatar} alt={record.fisrt_name + ' ' + record.last_name} />),
      },
      {
        title: 'Full Name',
        dataIndex: 'name',
        render: (name, record) => (<Link to={`/ad/user/${record.id}`}>{record.first_name} {record.last_name}</Link>),
        // ...this.getColumnSearchProps('username'),
        // width: '20%',
      },
      {
        title: 'Username',
        dataIndex: 'username',
        sorter: true,
        ...this.getColumnSearchProps('username'),
        // width: '13%',
      },

      {
        title: 'Gender',
        dataIndex: 'gender',
        filters: [{ text: 'Male', value: 'M' }, { text: 'Female', value: 'F' }, { text: 'Other', value: 'O' }],
      },
      {
        title: 'Email',
        dataIndex: 'email',
        ...this.getColumnSearchProps('email'),
      },
      {
        title: 'Age',
        dataIndex: 'profile.age',
        render: (age, record) => `${record.age}`,
        sorter: true,
      },
      {
        title: 'Phone',
        dataIndex: 'phone',
      },
      {
        title: 'Address',
        dataIndex: 'address',
        ...this.getColumnSearchProps('address'),
      },
      {
        title: 'Create at',
        dataIndex: 'create_at',
        sorter: true,
        render: create_at => `${moment(parseFloat(create_at)).format('YYYY-MM-DD')}`
      },
      {
        title: 'Status',
        dataIndex: 'status',
        filters: [
          { text: 'Active', value: 'active' },
          { text: 'Deleted', value: 'delete' },
          { text: 'Vip', value: 'vip' },
          { text: 'Banned', value: 'banned' },
        ],
        // ,
        // sorter: true,
        // render: create_at => `${moment(parseFloat(create_at)).fromNow()}`
      }
    ];

    return (
      <div>
        <span>Found {this.state.pagination.total} user </span>

        <div className="table_header">
          <Search
            placeholder="Search user"
            onSearch={value => console.log(value)}
            style={{ width: 200 }}
          />
          <Cascader
            style={{ width: 400 }}
            defaultValue={['hanoi', 'caugiay', 'dichvong']}
            placeholder="Search by address"
            options={hanhchinhvn}
            onChange={values => console.log(values)}
            changeOnSelect
          />
          <RangePicker onChange={this.handleData} />
          <Button type="primary" icon="search">Search</Button>
          <Button>Reset</Button>
        </div>
        <Table
          columns={columns}
          rowKey={record => record.id}
          dataSource={this.state.data}
          pagination={this.state.pagination}
          loading={this.state.loading}
          onChange={this.handleTableChange}
          bordered
        />
      </div>

    );
  }
}

export default UserTable;
