import { Link } from "react-router-dom";

const TiketCard = ({ tiket }) => {
  return (
    <Link to={`/tiket/${tiket.id}`}>
      <div className="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition w-full max-w-xs">
        <img src={tiket.gambar} alt={tiket.rute} className="h-48 w-full object-cover" />
        <div className="p-4">
          <h3 className="font-semibold text-lg text-gray-800">{tiket.rute}</h3>
          <p className="text-sm text-gray-500">{tiket.maskapai} - {tiket.tanggal}</p>
          <p className="text-orange-600 font-bold mt-2">Rp {tiket.harga.toLocaleString()}</p>
        </div>
      </div>
    </Link>
  );
};

export default TiketCard;
