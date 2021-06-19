const Pencatat = (pengguna, id) => {
  let data = []
  data = pengguna
  data.map((item, index) => {
    const temp = item.ID_PENGGUNA
    const temp2 = id
    return (
      <div key={index}>{temp == temp2 ? <div>{item.NAMA}</div> : null}</div>
    )
  })
}
export default Pencatat
