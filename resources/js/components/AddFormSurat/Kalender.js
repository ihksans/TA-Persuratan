// import React, { useState } from 'react'
// import Calendar from 'react-calendar'
// import 'react-calendar/dist/Calendar.css'

// function Kalender() {
//   const [value, setValue] = useState(new Date())
//   function onChange(nextValue) {
//     setValue(nextValue)
//     console.log('date: ', value)
//     const a = new Date(value).toISOString().slice(0, 10)
//     console.log('date: ', a)
//   }

//   return <Calendar onChange={onChange} value={value} />
// }

// export default Kalender

import React, { useState } from 'react'
import DatePicker, { registerLocale } from 'react-datepicker'
import id from 'date-fns/locale/id'
registerLocale('id', id)

import 'react-datepicker/dist/react-datepicker.css'

// CSS Modules, react-datepicker-cssmodules.css
// import 'react-datepicker/dist/react-datepicker-cssmodules.css';

const Kalender = ({ onChange, minDate }) => {
  const [startDate, setStartDate] = useState(null)

  const dateToString = (d) =>
    `${d.getFullYear()}-${('00' + (d.getMonth() + 1)).slice(-2)}-${(
      '00' + d.getDate()
    ).slice(-2)}`

  const changes = (date) => {
    setStartDate(date)
    let value = new Date(date)
    const exDate = dateToString(value)
    onChange(exDate, value)
  }

  return (
    <DatePicker
      dateFormat="dd  MMMM  yyyy"
      locale="id"
      key="example9"
      selected={startDate}
      onChange={(date) => changes(date)}
      minDate={minDate}
    />
  )
}

export default Kalender
