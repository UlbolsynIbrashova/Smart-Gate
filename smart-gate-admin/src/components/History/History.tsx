import React from "react";
import './styles.scss';

const History: React.FC = () => {
  return (
    <div className="history">
      <h1>History</h1>
      <div className="mt-2">
        <div className="filter">
          <input type="text" placeholder="Search by Name"/>
          <select>
            <option>Smart Gate ID</option>
            <option value="Чебурашка">Чебурашка</option>
            <option value="Крыса Лариса">Крыса Лариса</option>
          </select>
          <select>
            <option>Status</option>
            <option value="Чебурашка">Чебурашка</option>
            <option value="Крыса Лариса">Крыса Лариса</option>
          </select>
          <select>
            <option>Action</option>
            <option value="Чебурашка">Чебурашка</option>
            <option value="Крыса Лариса">Крыса Лариса</option>
          </select>
          <div className="date-range">
            <input readOnly type="text" placeholder="Date range" />
            <img src="/images/calendar.svg" alt=""/>
          </div>
        </div>
      </div>
      <table>
        <thead>
          <tr>
            <th>Citizen ID</th>
            <th>Passport №</th>
            <th>Surname</th>
            <th>Name</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2</td>
            <td>040595849</td>
            <td>Kim</td>
            <td>Gali</td>
            <td>Success</td>
            <td>2016-12-13</td>
            <td>Scan</td>
          </tr>
          <tr>
            <td>56</td>
            <td>040595849</td>
            <td>Berdikhanova</td>
            <td>Symbat</td>
            <td>Success</td>
            <td>2016-12-13</td>
            <td>Scan</td>
          </tr>
          <tr>
            <td>69</td>
            <td>060595849</td>
            <td>Aibetov</td>
            <td>Syrym</td>
            <td>Success</td>
            <td>2016-12-15</td>
            <td>Scan</td>
          </tr>
          <tr>
            <td>420</td>
            <td>060595849</td>
            <td>Sadvakassova</td>
            <td>Assem</td>
            <td>Success</td>
            <td>2016-12-15</td>
            <td>Writing</td>
          </tr>
          <tr>
            <td>422</td>
            <td>060595849</td>
            <td>Berik</td>
            <td>Dana</td>
            <td>Success</td>
            <td>2016-12-15</td>
            <td>Scan</td>
          </tr>
        </tbody>
      </table>
    </div>
  );
};

export default History;
