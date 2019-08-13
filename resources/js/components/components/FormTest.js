import React from 'react';
import hanhchinhvn from '../hanhchinhvn.json';
import { Cascader } from 'antd'


const FormTest = props => {

  // const onChange = (values) => {
  //   console.log(values)
  // }

  return (
    <div>
      <Cascader
       style={{ width: '50%' }}
        // defaultValue={['zhejiang', 'hangzhou', 'xihu']}
        options={hanhchinhvn}
        onChange={values => console.log(values)}
        changeOnSelect
      />,
    </div>
  )
}

export default FormTest
